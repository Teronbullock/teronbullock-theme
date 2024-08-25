/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { 
  useBlockProps,
  BlockControls
} from '@wordpress/block-editor'; 

import { 
  Toolbar,
  ToolbarDropdownMenu
} from '@wordpress/components';

import { 
  useRef
} from '@wordpress/element';

import { useSelect } from '@wordpress/data';
import { useEntityRecords, useEntityRecord } from '@wordpress/core-data';

import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit({attributes, setAttributes, context }) {
  const { postId, postType } = context;
  const postTermsIds = useRef({});
  const { categoryType, displayType } = attributes;
  let termNames = '';
  let additionalClasses = '';
  
  
  // get taxonomy slug
  const postTaxonomy = useSelect( ( select ) => {
    if (!postId || !postType) {
      return null; 
    }

    const taxonomyInfo = select('core').getTaxonomies({ type: postType });

    if (taxonomyInfo) {
      return taxonomyInfo[0].slug;
    } 

    return null;
  }, [postId]);    

  // get taxonomy terms Ids
  const { record: taxonomyTerms, hasResolved: taxonomyTermsResolved } = useEntityRecord( 'postType', postType, postId );

  if (taxonomyTerms && taxonomyTermsResolved && postTaxonomy) {
    postTermsIds.current = taxonomyTerms[postTaxonomy];
  }

  const { records: termRecords, hasResolved: termRecordsResolved } = useEntityRecords( 'taxonomy', postTaxonomy );

  if (termRecords && termRecordsResolved) {
    termRecords.forEach( term => {
      if (postTermsIds.current.includes(term.id)) {
        if (termNames === '') {
          termNames = term.name;
        } else {
          termNames += ', ' + term.name;
        }
      }
    });
  }

  // add additional classes based on display type
  additionalClasses = {
    'block': '',
    'inline': 'inline',
    'inline-block': 'inline-block'
  }[displayType] || '';
  

  const blockProps = useBlockProps({
    className: additionalClasses,
  });

	return (
    <>
      <BlockControls>
        <Toolbar label='Select Category Type'>
          <ToolbarDropdownMenu 
            label='Select Category Type'
            controls={[ 
              {
                icon: 'text-page',
                title: 'Taxonomy',
                onClick: () => setAttributes({categoryType: 'taxonomy'}),
                isActive: attributes.categoryType === 'taxonomy'
              },
              {
                icon: 'text-page',
                title: 'Text',
                onClick: () => setAttributes({categoryType: 'text'}),
                isActive: attributes.categoryType === 'text'
              }
            ]}
          />
        </Toolbar>
        <Toolbar label='Select Display Type'>
          <ToolbarDropdownMenu 
            label='Select Display Type'
            controls={[ 
              {
                icon: 'visibility',
                title: 'Block',
                onClick: () => setAttributes({displayType: 'block'}),
                isActive: attributes.displayType === 'block'
              },
              {
                icon: 'visibility',
                title: 'Inline',
                onClick: () => setAttributes({displayType: 'inline'}),
                isActive: attributes.displayType === 'inline'
              },
              {
                icon: 'visibility',
                title: 'Inline Block',
                onClick: () => setAttributes({displayType: 'inline-block'}),
                isActive: attributes.displayType === 'inline-block'
              }
            ]}
          />
        </Toolbar>
      </BlockControls>
      { 
        categoryType === 'taxonomy' ? (
          <p { ...blockProps }>
            { termNames || 'No Category'}
          </p>
        ) : categoryType === 'text' ? (
          <p { ...blockProps } >
            Frontend Text
          </p>
        ) : null
      } 
    </>
	);
}

