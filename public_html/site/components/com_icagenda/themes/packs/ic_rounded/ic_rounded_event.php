<?php
/**
 *------------------------------------------------------------------------------
 *  iCagenda v3 by Jooml!C - Events Management Extension for Joomla! 2.5 / 3.x
 *------------------------------------------------------------------------------
 * @package     com_icagenda
 * @copyright   Copyright (c)2012-2014 Cyril Rezé, Jooml!C - All rights reserved
 *
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Cyril Rezé (Lyr!C)
 * @link        http://www.joomlic.com
 *
 * @themepack	ic_rounded
 * @template	event_details
 * @version 	3.3.3 2014-03-27
 * @since       1.0
 *------------------------------------------------------------------------------
*/

// No direct access to this file
defined('_JEXEC') or die(); ?>

<!--
 *
 * iCagenda by Jooml!C
 * ic_rounded Theme Pack
 *
 * @template	event_details
 * @version 	3.3.7
 *
-->

<?php // Event Details Template ?>

	<?php // Header (Title/Category) of the event ?>
	<div class="event-header ic-clearfix">

		<?php // Title of the event ?>
		<div class="title-header ic-float-left">
			<h1>
				<?php echo $EVENT_TITLE; ?>
			</h1>
		</div>

		<?php // Category ?>
		<div class="title-cat ic-float-right ic-details-cat" style="color:<?php echo $CATEGORY_COLOR; ?>;">
			<?php echo $CATEGORY_TITLE; ?>
		</div>

	</div>

	<?php // Sharing and Registration ?>
	<div>

		<?php // AddThis Social Sharing ?>
		<div style="float:left">
			<?php echo $EVENT_SHARING; ?>
		</div>

		<?php // Registration button ?>
		<div>
			<?php echo $EVENT_REGISTRATION; ?>
		</div>

	</div>
	<div style="clear:both"></div>

	<?php // Event Informations Display ?>
	<div class="icinfo">

		<?php // Show Image of the event ?>
		<div class="image">
			<?php if ($EVENT_IMAGE): ?>
			<div>
				<?php echo $EVENT_IMAGE_TAG; ?>
			</div>
			<?php endif; ?>
		</div>

		<?php // Details of the event ?>
		<div class="details">

			<?php // Next Date ('next' 'today' or 'last date' if no next date) ?>
			<strong><?php echo $EVENT_VIEW_DATE_TEXT; ?>:</strong>&nbsp;<?php echo $EVENT_VIEW_DATE; ?>

			<?php // Location (different display, depending on the fields filled) ?>
			<p>

				<?php // Venue name ?>
				<?php if ($EVENT_VENUE): ?>
					<strong><?php echo JTEXT::_('COM_ICAGENDA_EVENT_PLACE'); ?>:</strong> <?php echo $EVENT_VENUE;?>
				<?php endif; ?>

				<?php // If Venue Name exists and city set (Google Maps). Displays Country if set. ?>
				<?php if (($EVENT_VENUE) AND ($EVENT_CITY)): ?>
					<span>&nbsp;|&nbsp;</span>
					<strong><?php echo JTEXT::_('COM_ICAGENDA_EVENT_CITY'); ?>:</strong> <?php echo $EVENT_CITY;?><?php if ($EVENT_COUNTRY): ?>, <?php echo $EVENT_COUNTRY;?><?php endif; ?>
				<?php endif; ?>

				<?php // If Venue Name doesn't exist and city set (Google Maps). Displays Country if set. ?>
				<?php if ((!$EVENT_VENUE) AND ($EVENT_CITY)): ?>
					<strong><?php echo JTEXT::_('COM_ICAGENDA_EVENT_CITY'); ?>:</strong> <?php echo $EVENT_CITY;?><?php if ($EVENT_COUNTRY): ?>, <?php echo $EVENT_COUNTRY;?><?php endif; ?>
				<?php endif; ?>

			</p>

		</div>
		<div style="clear:both"></div>

		<?php // description text ?>
		<?php if ($EVENT_DESC): ?>
		<div id="detail-desc">
			<?php echo $EVENT_DESCRIPTION; ?>
		<?php endif; ?>

		<?php if (!$EVENT_DESC): ?>
		<div>
		<?php endif; ?>

			<p>&nbsp;</p>

			<?php // Information ?>
			<?php if ($EVENT_INFOS): ?>
			<div class="information">

				<?php // Title Box Information ?>
				<div class="infoleft">
					<label><?php echo JTEXT::_('COM_ICAGENDA_EVENT_INFOS'); ?></label>
				</div>

				<?php // Information Details ?>
				<div class="infomiddle">

					<?php // Nb of seats available ?>
					<?php if ($SEATS_AVAILABLE): ?>
					<div>
						<div class="lbl">
							<?php echo JTEXT::_('COM_ICAGENDA_REGISTRATION_PLACES_LEFT'); ?>
						</div>
						<div class="data">
							<?php echo $SEATS_AVAILABLE; ?>
						</div>
					</div>
					<?php endif; ?>

					<?php // Max. Nb of seats ?>
					<?php if ($MAX_NB_OF_SEATS): ?>
					<div>
						<div class="lbl">
							<?php echo JTEXT::_('COM_ICAGENDA_REGISTRATION_NUMBER_PLACES'); ?>
						</div>
						<div class="data">
							<?php echo $MAX_NB_OF_SEATS; ?>
						</div>
					</div>
					<?php endif; ?>

					<?php // Phone Number ?>
					<?php if ($EVENT_PHONE): ?>
					<div>
						<div class="lbl">
							<?php echo JTEXT::_('COM_ICAGENDA_EVENT_PHONE'); ?>
						</div>
						<div class="data">
							<?php echo $EVENT_PHONE; ?>
						</div>
					</div>
					<?php endif; ?>

					<?php // Email ?>
					<?php if ($EVENT_EMAIL): ?>
					<div>
						<div class="lbl">
							<?php echo JTEXT::_('COM_ICAGENDA_EVENT_MAIL'); ?>
						</div>
						<div class="data">
							<?php echo $EVENT_EMAIL_CLOAKING; ?>
						</div>
					</div>
					<?php endif; ?>

					<?php // Website ?>
					<?php if ($EVENT_WEBSITE): ?>
					<div>
						<div class="lbl">
							<?php echo JTEXT::_('COM_ICAGENDA_EVENT_WEBSITE'); ?>
						</div>
						<div class="data">
							<?php echo $EVENT_WEBSITE_LINK; ?>
						</div>
					</div>
					<?php endif; ?>

					<?php // Address ?>
					<?php if ($EVENT_ADDRESS): ?>
					<div>
						<div class="lbl">
							<?php echo JTEXT::_('COM_ICAGENDA_EVENT_ADDRESS'); ?>
						</div>
						<div class="data">
							<?php echo $EVENT_ADDRESS; ?>
						</div>
					</div>
					<?php endif; ?>

				</div>

				<?php // file attached ?>
				<?php if ($EVENT_ATTACHEMENTS): ?>
				<div class="inforight">
					<label><i><?php echo JTEXT::_('COM_ICAGENDA_EVENT_FILE'); ?></i></label><br />
					<b><?php echo $EVENT_ATTACHEMENTS_TAG; ?></b>
				</div>
				<?php endif; ?>

			</div><?php // end div.details ?>
			<?php endif; ?>

		</div>
		<div style="clear:both"></div>

	</div>
	<div style="clear:both"></div>

	<?php // Google Maps ?>
	<?php if ($GOOGLEMAPS_COORDINATES): ?>
	<p>&nbsp;</p>
	<div id="detail-map">
		<h3><?php echo JTEXT::_('COM_ICAGENDA_EVENT_MAP'); ?></h3><br />
		<div id="icagenda_map">
			<?php echo $EVENT_MAP; ?>
		</div>
	</div>
	<div style="clear:both"></div>
	<?php endif; ?>

	<?php // List of all dates (multi-dates and/or period from to) ?>
	<?php if ($EVENT_SINGLE_DATES OR $EVENT_PERIOD): ?>
	<p>&nbsp;</p>
	<div id="detail-date-list">
		<h3 class="alldates"><?php echo JTEXT::_('COM_ICAGENDA_EVENT_DATES'); ?></h3><br />
		<div class="datesList">
			<?php echo $EVENT_PERIOD; ?>
			<?php echo $EVENT_SINGLE_DATES; ?>
		</div>
	</div>
	<div style="clear:both"></div>
	<?php endif; ?>

	<?php // List of Participants ?>
	<?php if ($PARTICIPANTS_DISPLAY == 1) : ?>
	<p>&nbsp;</p>
	<div>
		<h3><?php echo $PARTICIPANTS_HEADER; ?></h3>
		<?php echo $EVENT_PARTICIPANTS; ?>
	</div>
	<div style="clear:both"></div>
	<?php endif; ?>
