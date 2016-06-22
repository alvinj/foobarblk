<?php

/**
 * @file
 */
namespace Drupal\foobarblk\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Foobar' Block
 * @Block(
 * id = "block_foobarblk",
 * admin_label = @Translation("Foo Bar block"),
 * )
 */
class FoobarblkBlock extends BlockBase {

	/**
	 * {@inheritdoc}
	 */
	public function build() {
		return array (
			'#type' => 'markup',
      		'#markup' => '<h2>Foo Bar</h2>',
		);
	}

}



