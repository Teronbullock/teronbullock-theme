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

// import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */

export default function Edit({ attributes, setAttributes }) {
  const defaultBlockTemplate = [
    [
      'core/group',
      {
        metadata: { name: 'TB Query Container' },
        className: 'tb-query-container is-style-container',
        layout: {
          type: 'constrained',
          contentSize: '1000px',
          wideSize: '1440px',
        },
      },
      [
        [
          'core/query',
          {},
          [
            ['core/post-template', {}, [['tb-theme/query-post-item', {}]]],
            ['core/query-pagination', {}, []],
            ['core/query-no-results', {}, []],
          ],
        ],
      ],
    ],
  ];

  return (
    <div {...useBlockProps()}>
      <InnerBlocks template={defaultBlockTemplate} />
    </div>
  );
}
