/**
 * Ticker Bar Block - Editor Component
 *
 * Plain vanilla JS using wp.* globals (no build step required)
 *
 * @package CheekyRobots
 */

(function() {
	const { registerBlockType } = wp.blocks;
	const { createElement: el, Fragment } = wp.element;
	const { InspectorControls, useBlockProps } = wp.blockEditor;
	const { PanelBody, RangeControl, TextControl, Button } = wp.components;
	const { __ } = wp.i18n;

	/**
	 * Edit component for the Ticker Bar block
	 */
	function Edit(props) {
		const { attributes, setAttributes } = props;
		const { items, speed } = attributes;

		const blockProps = useBlockProps();

		/**
		 * Update a specific item's text
		 */
		function updateItem(index, value) {
			const newItems = [...items];
			newItems[index] = value;
			setAttributes({ items: newItems });
		}

		/**
		 * Remove an item from the list
		 */
		function removeItem(index) {
			const newItems = items.filter((_, i) => i !== index);
			setAttributes({ items: newItems });
		}

		/**
		 * Add a new empty item
		 */
		function addItem() {
			const newItems = [...items, ''];
			setAttributes({ items: newItems });
		}

		/**
		 * Inspector Controls (Sidebar Settings)
		 */
		const inspectorControls = el(
			InspectorControls,
			{},
			el(
				PanelBody,
				{
					title: __('Ticker Settings', 'cheeky-robots'),
					initialOpen: true
				},
				// Speed control
				el(RangeControl, {
					label: __('Animation Speed (seconds)', 'cheeky-robots'),
					value: speed,
					onChange: (value) => setAttributes({ speed: value }),
					min: 10,
					max: 120,
					step: 5,
					help: __('Duration for one complete scroll cycle', 'cheeky-robots')
				})
			),
			el(
				PanelBody,
				{
					title: __('Ticker Items', 'cheeky-robots'),
					initialOpen: true
				},
				// Item repeater
				items.map((item, index) => {
					return el(
						'div',
						{
							key: index,
							style: {
								marginBottom: '12px',
								padding: '12px',
								border: '1px solid #ddd',
								borderRadius: '4px',
								background: '#f9f9f9'
							}
						},
						el(TextControl, {
							label: __('Item', 'cheeky-robots') + ' ' + (index + 1),
							value: item,
							onChange: (value) => updateItem(index, value),
							placeholder: __('Enter ticker text...', 'cheeky-robots')
						}),
						el(Button, {
							isDestructive: true,
							isSmall: true,
							onClick: () => removeItem(index),
							style: { marginTop: '8px' }
						}, __('Remove Item', 'cheeky-robots'))
					);
				}),
				// Add item button
				el(Button, {
					isPrimary: true,
					onClick: addItem,
					style: { marginTop: '12px' }
				}, __('+ Add Item', 'cheeky-robots'))
			)
		);

		/**
		 * Editor Preview (Static display of ticker items)
		 */
		const editorPreview = el(
			'div',
			blockProps,
			el(
				'div',
				{ className: 'ticker-scroll' },
				items.length > 0
					? items.map((item, index) => {
						return el(
							'span',
							{
								key: index,
								className: 'ticker-item'
							},
							el('span', { className: 'ticker-dot' }),
							item || el('em', {}, __('(empty)', 'cheeky-robots'))
						);
					})
					: el(
						'span',
						{ className: 'ticker-item', style: { opacity: 0.5 } },
						el('span', { className: 'ticker-dot' }),
						__('No items added yet. Use the sidebar to add items.', 'cheeky-robots')
					)
			)
		);

		/**
		 * Return both inspector controls and editor preview
		 */
		return el(
			Fragment,
			{},
			inspectorControls,
			editorPreview
		);
	}

	/**
	 * Save component - returns null for dynamic blocks
	 */
	function Save() {
		return null;
	}

	/**
	 * Register the block type
	 */
	registerBlockType('cheeky-robots/ticker-bar', {
		edit: Edit,
		save: Save
	});
})();
