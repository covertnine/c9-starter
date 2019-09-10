(function(wp) {

// $("#wporg_box_id").prependTo("#")

  var el                = wp.element.createElement;
  var registerBlockType = wp.blocks.registerBlockType;
  var TextControl       = wp.components.TextControl;

registerBlockType(
	  "cortextoo/meta-block",
	  {
	  title: "Meta Block",
	  icon: "smiley",
	  category: "common",

	  attributes: {
					blockValue: {
			  type: "string",
			  source: "meta",
			  meta: "cortextoo_meta_block_field"
					}
	  },

	  edit: function(props) {
					var className     = props.className;
					var setAttributes = props.setAttributes;

					function updateBlockValue(blockValue) {
			setAttributes( { blockValue } );
					}

				return el(
					"div",
					{ className: className },
				el(
				  TextControl,
				  {
				label: "Meta Block Field",
				value: props.attributes.blockValue,
				onChange: updateBlockValue
							}
				  )
					);
	  },

	  // No information saved to the block
	  // Data is saved to post meta via attributes
	  save: function() {
					return null;
	  }
  }
	  );

wp.hooks.addFilter(
	"editor.PostFeaturedImage",
	"cortextoo/wrap-post-featured-image",
	OriginalComponent => {
	  return props => {
			return el(
			"div",
			{},
			[
			el( OriginalComponent, props ),
			el(
			  "div",
			  { class: "cortextoo-check-wrapper" },
			  [
			el(
				"input",
				{
			  class: "components-checkbox__input",
			  type: "checkbox",
			  featImageWide: 0,
			  onClick: event => {
						update_post_meta( event, props );
			  }
					}
				)
			]
			  )
			]
			);
	  };
	}
  );

  function update_post_meta(event, props) {
		console.log( event.target, props );
  }
})( window.wp, jQuery );
