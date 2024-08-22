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

import { useRef } from '@wordpress/element';

import { useEntityRecords, useEntityRecord } from '@wordpress/core-data';
import { useSelect, select } from '@wordpress/data';


/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */
export default function Edit({attributes, setAttributes, context}) {
  const { postId, postType} = context;
  const currentPostTypeCat = `${postType}_categories`;
  const termCatIds = useRef({});
  const termIds = useRef();
  const termNames = useRef('');
  let detailText = '';

  
  if (attributes.detailType === 'category') {
    

    const taxonomies = useSelect( ( select ) => {
      if ( postId ) {
          let tax = select( 'core' ).getTaxonomies( { type: postType } );

          return tax;
      }
      return [];
  }, [ postId ] );

  if ( taxonomies ) {
    console.log('taxonomies', taxonomies, taxonomies[0].slug);
  }
    //----------
    // const { records: taxonomyRecords, hasResolved: taxonomyHasResolved } = useEntityRecords( 'taxonomy', currentPostTypeCat );

    // if (taxonomyRecords && taxonomyHasResolved) {
    //   // console.log('taxonomyRecords', taxonomyRecords);
    //   taxonomyRecords.forEach( term => {
    //     termCatIds.current[term.id] = term.name;
    //   });
    // }

    const { record: termNameRecord, hasResolved: termNameHasResolved } = useEntityRecord( 'postType', postType, postId );

    if (termNameRecord && termNameHasResolved) {
      // console.log(`postType ${postId} - ${currentPostTypeCat}: `, termNameRecord);

      // termIds.current = termNameRecord[currentPostTypeCat];

      // termIds.current.forEach( (termId, index) => {
      //   if ( index <= 0 ) {
      //     termNames.current = termCatIds.current[termId];
      //   } else {
      //     termNames.current += ', ' + termCatIds.current[termId];
      //   }
      // });
    }

    detailText = termNames.current;
  } else if (attributes.detailType === 'frontendText') {
    detailText = 'Frontend Text' ;
  }

	return (
		<div { ...useBlockProps() } >
      <BlockControls>
        <Toolbar label='Select Details'>
          <ToolbarDropdownMenu 
            label='Select Details'
            controls={[ 
              {
                icon: 'text-page',
                title: 'Post Category',
                onClick: () => setAttributes({ detailType: 'category' }),
                isActive: attributes.detailType === 'category'
              },
              {
                icon: 'text-page',
                title: 'Frontend Text (ACF)',
                onClick: () => setAttributes({ detailType: 'frontendText' }),
                isActive: attributes.detailType === 'frontendText'
              }
            ]}
          />
        </Toolbar>
      </BlockControls>    
      <p class="project-card-details__text mb-4">
        { __(detailText, 'tb-theme') }
      </p>
		</div>
	);
}
