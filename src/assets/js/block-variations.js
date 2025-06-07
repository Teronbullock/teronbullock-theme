wp.domReady(function () {
  // create a block object
  const tbBlockVariation = [
    {
      name: 'core/group',
      value: {
        name: 'group-section',
        title: 'Section',
        description: 'A group of blocks that can be used as a section.',
        attributes: {
          tagName: 'section',
          className: 'section-group',
          style: {
            spacing: {
              padding: {
                top: '6.75rem',
                bottom: '6.75rem',
              },
            },
          },
        },
      },
    },
    {
      name: 'core/group',
      value: {
        name: 'group-backdrop-shadow',
        title: 'Group w/ Backdrop Shadow',
        description: 'A group of blocks with a backdrop shadow.',
        attributes: {
          tagName: 'div',
          className: 'has-backdrop-shadow',
        },
      },
    },
    {
      name: 'core/columns',
      value: {
        name: 'col-mobile-wrap',
        title: 'Columns With Mobile Wrap',
        description: 'Columns with mobile wrap.',
        innerBlocks: [
          ['core/column'],
          ['core/column'],
          ['core/column'],
          ['core/column'],
          ['core/column'],
        ],
        attributes: {
          tagName: 'div',
          className: 'wp-block-columns--tb-mobile-wrap',
          style: {
            spacing: {
              margin: {
                bottom: '3.5rem',
              },
            },
          },
        },
      },
    },
    {
      name: 'tb-theme/query-card',
      value: {
        name: 'tb-theme/query-card-img',
        title: 'TB: Query Card with Image',
        description: 'TB Query card with image.',
        innerBlocks: [
          [
            'core/post-featured-image',
            {
              aspectRatio: '16/9',
              scale: 'fill',
              style: {
                spacing: {
                  margin: { bottom: '1rem' },
                },
                border: { radius: '8px' },
              },
            },
          ],
          [
            'core/post-title',
            {
              style: {
                spacing: {
                  margin: { bottom: '1rem' },
                },
                elements: {
                  link: {
                    color: { text: 'var:preset|color|black' },
                  },
                },
              },
              textColor: 'black',
              fontSize: 'medium',
            },
          ],
          ['tb-theme/category-display-block'],
        ],
      },
    },
  ];

  // loop through the tb block variation array
  tbBlockVariation.forEach(block => {
    // register the block variation
    wp.blocks.registerBlockVariation(block.name, block.value);
  });
});
