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
  BlockControls
} from '@wordpress/block-editor'; 

import { 
  Toolbar,
  ToolbarDropdownMenu
} from '@wordpress/components';

import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */

export default function Edit({attributes, setAttributes}) {

  const defaultBlockTemplate = [
    ['core/group',
      {
        "metadata": {"name":"Post Item"},
        "className": "tb-post-item",
        "style": {
          "border": {
            "width": "1px",
            "color": "#0f3952",
            "radius": "10px"
          },
          "spacing": {
            "padding": {
              "top": "2rem",
              "bottom": "2rem",
              "left": "2rem",
              "right": "2rem"
            },
            "margin": {
              "bottom": "2rem"
            }
          }
        },
        "layout": { "type": "default" }
      },
      [
        ['core/post-title',
          {
            "align": "wide",
            "style": {
              "spacing": {
                "margin": {
                  "right": "0",
                  "left": "0",
                  "top": "0",
                  "bottom": "1rem"
                }
              },
              "typography": {
                "lineHeight": "1.33"
              },
              "elements": {
                "link": {
                  "color": {
                    "text": "var:preset|color|secondary"
                  }
                }
              }
            },
            "textColor": "secondary",
            "fontSize": "medium"
          }
        ],
        ['core/group', 
          {
            "className": "is-style-tb-theme-flex",
            "style": {
              "spacing": {
                "margin": { "bottom":"1rem" }
              }
            },
            "layout": { "type": "default" } 
          },
          [
            ['core/post-terms', 
              {
                "term": "appearances-categories",
                "separator": "",
                "className":"tb-theme-post-cat",
                "style":{ 
                  "spacing": {
                    "margin": { "left":"0","right":"1.5rem" },
                    "padding": { 
                      "top": "0.5rem",
                      "bottom": "0.5rem",
                      "left": "0.5rem",
                      "right": "0.5rem"
                    }
                  },
                  "typography": { "textTransform": "uppercase" },
                  "elements":{ 
                    "link": { "color": { "text": "var:preset|color|white" } } 
                  }
                },
                "backgroundColor": "secondary",
                "textColor": "white",
                "fontSize": "small",
                "fontFamily": "heading"
              } 
            ],
            ['core/post-date', 
              {
                "style": {
                  "spacing": {
                    "margin": { "left":"0","right":"1.5rem" }
                  }
                },
                "dateFormat": "F j, Y"
              }
            ],
          ]
        ],
        ['core/post-excerpt',
          {
            "fontSize":"medium"
          }
        ]
      ]
    ],
  ];

	return (
		<div { ...useBlockProps() }>
      <BlockControls>
        <Toolbar label='Select Details'>
          <ToolbarDropdownMenu 
            label='Select Post Link Type'
            controls={[ 
              {
                icon: 'text-page',
                title: 'Link to Post',
                onClick: () => setAttributes({ postLinkType: 'post' }),
                isActive: attributes.postLinkType === 'post'
              },
              {
                icon: 'text-page',
                title: 'Link to External URL',
                onClick: () => setAttributes({ postLinkType: 'ext_link' }),
                isActive: attributes.postLinkType === 'ext_link'
              }
            ]}
          />
        </Toolbar>
      </BlockControls>  
      <InnerBlocks
        template={ defaultBlockTemplate }
      />
		</div>
	);
}
