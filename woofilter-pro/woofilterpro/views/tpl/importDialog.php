<div class="wpfHidden">
	<div id="wpfImportWnd" title="<?php echo esc_attr(__('Import filters', 'woo-product-filter')); ?>">
		<p><?php esc_html_e('Upload your export sql file', 'woo-product-filter'); ?></p>
		<form id="wpfImportForm">
			<label class="wpfImportReasonShell">
				<?php
				HtmlWpf::input('import_file', array(
					'type' => 'file',
					'attrs' => ' id="wpfImportInput" accept=".sql"'
				));
				?>
			</label>
			<?php HtmlWpf::hidden('mod', array('value' => 'woofilterpro')); ?>
			<?php HtmlWpf::hidden('action', array('value' => 'importGroup')); ?>
			<?php HtmlWpf::hidden('pl', array('value' => 'wpf')); ?>
		</form>
	</div>
</div>
