/**
 * Main JavaScript file
 *
 * @package         Tabs
 * @version         3.4.2
 *
 * @author          Peter van Westen <peter@nonumber.nl>
 * @link            http://www.nonumber.nl
 * @copyright       Copyright © 2014 NoNumber All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

(function($) {
	nnTabs = {
		show: function(id, scroll, openparents) {
			var $el = $('a[href$="#' + id + '"]');

			if (openparents) {
				var $parents = $el.parents().get().reverse();
				var hasparents = 0;
				$($parents).each(function() {
					if ($(this).hasClass('tab-pane') && !$(this).hasClass('in')) {
						$(this).parent().parent().find('a[href="#' + this.id + '"]').tab('show')
							.on('shown shown.bs.tab', function() {
								$el.tab('show');
							});
						hasparents = 1;
					}
				});
				if (!hasparents) {
					$el.tab('show');
				}
			} else {
				$el.tab('show');
			}


			$el.focus();
		},
	}

	$(document).ready(function() {
		if (nn_tabs_use_hash) {
			if (window.location.hash) {
				var id = window.location.hash.replace('#', '');
				if (!nn_tabs_urlscroll && $('.nn_tabs > .tab-content > #' + id).length > 0) {
					// scroll to top to prevent browser scrolling
					$('html,body').animate({ scrollTop: 0 });
				}
				nnTabs.show(id, nn_tabs_urlscroll, 1);
			}
			$('.nn_tabs-tab a[data-toggle="tab"]').on('show show.bs.tab', function($e) {
				window.location.hash = String($e.target).substr(String($e.target).indexOf("#") + 1);
				$e.stopPropagation();
			});
		}
	});
})(jQuery);
