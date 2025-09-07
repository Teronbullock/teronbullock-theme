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
  InnerBlocks,
  BlockControls,
} from '@wordpress/block-editor';

import { Toolbar, ToolbarDropdownMenu } from '@wordpress/components';

import './editor.scss';

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
        metadata: { name: 'Post Item' },
        className: 'tb-post-item',
        style: {
          border: {
            width: '1px',
            color: '#0f39521A',
            radius: '10px',
          },
          spacing: {
            padding: {
              top: 'var(--wp--preset--spacing--40)',
              right: 'var(--wp--preset--spacing--40)',
              bottom: 'var(--wp--preset--spacing--40)',
              left: 'var(--wp--preset--spacing--40)',
            },
            margin: {
              bottom: 'var(--wp--preset--spacing--60)',
            },
          },
        },
        layout: { type: 'default' },
      },
      [
        [
          'core/post-title',
          {
            align: 'wide',
            style: {
              spacing: {
                margin: {
                  right: '0',
                  left: '0',
                  top: '0',
                  bottom: '1rem',
                },
              },
              typography: {
                lineHeight: '1.5',
                fontWeight: '600',
              },
              elements: {
                link: {
                  color: {
                    text: 'var:preset|color|secondary',
                  },
                },
              },
            },
            textColor: 'secondary',
            fontSize: 'lg',
          },
        ],
        [
          'core/group',

          {
            metadata: { name: 'Post Meta' },
            className: 'tb-post-meta is-style-tb-theme-flex',

            style: {
              spacing: {
                margin: { bottom: '1rem' },
              },
            },

            layout: { type: 'default' },
          },
          [
            [
              'tb-theme/category-display-block',
              {
                style: {
                  elements: {
                    link: {
                      color: { text: 'var:preset|color|primary' },
                    },
                  },
                  spacing: {
                    padding: {
                      all: 'var:preset|spacing|20',
                    },
                    margin: {
                      right: 'var:preset|spacing|40',
                    },
                  },
                },
                fontSize: 'xs',
                backgroundColor: 'primary',
                textColor: 'white',
              },
            ],
            [
              'core/post-date',
              {
                style: {
                  spacing: {
                    margin: {
                      left: 'var:preset|spacing|20',
                      right: '0',
                    },
                    padding: {
                      top: 'var:preset|spacing|20',
                      bottom: 'var:preset|spacing|20',
                    },
                  },
                  typography: {
                    lineHeight: '1.5',
                  },
                },
                fontSize: 'xs',
                dateFormat: 'F j, Y',
                textColor: 'black',
              },
            ],
          ],
        ],
      ],
    ],
  ];

  return (
    <div {...useBlockProps()}>
      <BlockControls>
        <Toolbar label='Select Details'>
          <ToolbarDropdownMenu
            label='Select Post Link Type'
            controls={[
              {
                icon: 'text-page',
                title: 'Link to Post',
                onClick: () => setAttributes({ postLinkType: 'post' }),
                isActive: attributes.postLinkType === 'post',
              },
              {
                icon: 'text-page',
                title: 'Link to External URL',
                onClick: () => setAttributes({ postLinkType: 'ext_link' }),
                isActive: attributes.postLinkType === 'ext_link',
              },
            ]}
          />
        </Toolbar>
      </BlockControls>
      <InnerBlocks template={defaultBlockTemplate} />
    </div>
  );
}
