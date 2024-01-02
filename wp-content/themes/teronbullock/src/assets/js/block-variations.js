
wp.domReady( function() {

  
// create a block object
  const mpBlockVariation = [
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
    }
  ];


  // loop through the MP block variation array
  mpBlockVariation.forEach( ( block ) => {
    // register the block variation
    wp.blocks.registerBlockVariation(
      block.name,
      block.value
    );
  });

 
});

