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
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor'; 

// import { Button, ButtonGroup } from '@wordpress/components';
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */

export default function Edit() {

	return (
		<div { ...useBlockProps() }>
      <InnerBlocks 
        template={[
          ['core/post-featured-image',
            { 
            style:{ spacing:{ margin:{ bottom: '1rem'} }, border:{radius: '8px'}},
            aspectRatio: '16/9', 
            scale: 'fill'
            }
          ],
          ['core/post-title',
            {
              fontSize: 'medium', 
              style:{ spacing:{ margin:{ bottom: '1rem' } }, elements:{ link:{ color:{ text:"var:preset|color|black"} } } }, textColor: "black", 
            }
          ],
          ['tb-theme/project-card-details']
        ]}
      />
		</div>
	);
}
