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
  InspectorControls,
 } from '@wordpress/block-editor';

 import { 
  Button, 
  ButtonGroup,
  PanelBody
 } from '@wordpress/components';


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
export default function Edit({attributes, setAttributes}) {

  let detailText = '';
  
  if (attributes.detailType === 'category') {
    detailText = 'Category Detail';
  } else if (attributes.detailType === 'frontendText') {
    detailText = 'Frontend Text' ;
  }
 
	return (
		<div { ...useBlockProps() } >
      <InspectorControls>
        <PanelBody
          title={ __('Select Details', 'tb-theme-project-card-details') }
        >
          <ButtonGroup>
            <Button
              onClick={ () => setAttributes({ detailType: 'categories' }) }
              isPressed={ attributes.detailType === 'category' }
            >
              Post Category
            </Button>
            <Button
              onClick={ () => setAttributes({ detailType: 'frontendText' }) }
              isPressed={ attributes.detailType === 'frontendText' }
            >
              Frontend Text (ACF)
            </Button>
          </ButtonGroup>
        </PanelBody>
      </InspectorControls>
    
      <p class="project-card-details__text mb-4">
        { __(detailText, 'tb-theme-project-card-details') }
      </p>
		</div>
	);
}
