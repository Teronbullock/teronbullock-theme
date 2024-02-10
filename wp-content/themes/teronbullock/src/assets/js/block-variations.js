
wp.domReady( function() {

  
// create a block object
  const tbBlockVariation = [
    { name: 'core/group',
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
                bottom: '6.75rem'
              }
            }
          }
        }
      }
    },
    { name: 'core/columns',
      value: {
        name: 'col-mobile-wrap',
        title: 'Columns With Mobile Wrap',
        description: 'Columns with mobile wrap.',
        innerBlocks: [
          [ 'core/column'],
          [ 'core/column'],
          [ 'core/column'],
          [ 'core/column'],
          [ 'core/column'],
        ],
        attributes: { 
          tagName: 'div',
          className: 'wp-block-columns--tb-mobile-wrap',
          style: {
            spacing: {
              margin: {
                bottom: '3.5rem'
              }
            }
          }
        }
      }
    }
  ];


  // loop through the tb block variation array
  tbBlockVariation.forEach( ( block ) => {
    // register the block variation
    wp.blocks.registerBlockVariation(
      block.name,
      block.value
    );
  });

 
});

