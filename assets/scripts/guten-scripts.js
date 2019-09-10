(function(wp) {

// $("#wporg_box_id").prependTo("#")

  var el                = wp.element.createElement;
  var registerBlockType = wp.blocks.registerBlockType;
  var TextControl       = wp.components.TextControl;

registerBlockType(
	  "c9/meta-block",
	  {
	  title: "Meta Block",
	  icon: "smiley",
	  category: "common",

	  attributes: {
					blockValue: {
			  type: "string",
			  source: "meta",
			  meta: "c9_meta_block_field"
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
	"c9/wrap-post-featured-image",
	OriginalComponent => {
	  return props => {
			return el(
			"div",
			{},
			[
			el( OriginalComponent, props ),
			el(
			  "div",
			  { class: "c9-check-wrapper" },
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
