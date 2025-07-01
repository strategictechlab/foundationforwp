wp.domReady( () => {
	wp.blocks.registerBlockStyle(
		'core/paragraph',
		{
			name: 'lead',
			label: 'Lead',
		}
	);

	wp.blocks.registerBlockStyle(
		'core/group',
		{
			name: 'grid-container',
			label: 'Grid Container',
		}
	);
} );