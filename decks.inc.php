<? # vim: noai:ts=2:sw=2

if (! defined('SLIDESHOW'))
        trigger_error('No direct access', E_USER_ERROR);

$decks = array(

	'math' => array(
		'basics' => array(
			'numbers_1-10' => array(
				'title' => 'Whole numbers from 1-10',
			),
			'numbers_100' => array(
				'title' => '20 random whole numbers from 1-100',
			),
			'numbers_10000' => array(
				'title' => '20 random whole numbers from 1000-10000',
			),
			'fractions_1-10' => array(
				'title' => 'Fractions &lt;1 for denominators 2-10',
				'desc' => 'Non-simplified fractions; this deck is for teaching recognition.',
			),
		),
		'arithmatic' => array(
			'100_addition_problems' => array (
				'title' => '100 Addition problems',
				'desc' => 'Add all numbers from 1-10',
			),
			'45_subtraction_problems' => array (
				'title' => '45 Subtraction problems',
				'desc' => 'Subtract all combinations of 1-10 which result in positive numbers',
			),
			'100_multiplication_problems' => array(
				'title' => '100 Multiplication problems',
			),
			'100_division_problems' => array(
				'title' => '100 Division problems',
				'desc' => 'Divide all numbers 1-100 by 1-10 where the result is a whole number',
			),
			'times_tables_1-10' => array(
				'title' => 'Times tables from 1-10',
				'desc' => 'Sequential (not shuffled) times tables for numbers 1 - 10',
			),
		),
	),

	'reading' => array(
		'basics' => array(
			'abc_lowercase' => array(
				'title' => 'ABCs: Lowercase',
			),
			'abc_uppercase' => array(
				'title' => 'ABCs: Uppercase',
			),
			'abc_mixedcase' => array(
				'title' => 'ABCs: Uppercase + Lowercase',
			),
		),
		'sightwords' => array(
			'dolch_pre-primer' => array(
				'title' => 'Dolch Reading Words: Pre-Primer',
			),
			'dolch_primer' => array(
				'title' => 'Dolch Reading Words: Primer',
			),
			'dolch_1st_grade' => array(
				'title' => 'Dolch Reading Words: 1st Grade',
			),
			'dolch_2nd_grade' => array(
				'title' => 'Dolch Reading Words: 2nd Grade',
			),
			'dolch_3rd_grade' => array(
				'title' => 'Dolch Reading Words: 3rd Grade',
			),
			'dolch_nouns' => array(
				'title' => 'Dolch Reading Words: Nouns',
			),
		),

		'phonics' => array(
			'ab_ad_am' => array(
				'title' => 'Phonics List: ab, ad, am',
			),
			'ack_and_ash' => array(
				'title' => 'Phonics List: ack, and, ash',
			),
			'ail_ain_air' => array(
				'title' => 'Phonics List: ail, ain, air',
			),
			'ake_ate' => array(
				'title' => 'Phonics List: ake, ate',
			),
			'ale_ame_ay' => array(
				'title' => 'Phonics List: ale, ame, ay',
			),
			'all_aw' => array(
				'title' => 'Phonics List: all, aw',
			),
			'an_ap_at' => array(
				'title' => 'Phonics List: an, ap, at',
			),
			'ank_ink' => array(
				'title' => 'Phonics List: ank, ink',
			),
			'ar_ark_art' => array(
				'title' => 'Phonics List: ar, ark, art',
			),
			'eck_ell_est' => array(
				'title' => 'Phonics List: eck, ell, est',
			),
			'ed_en_et' => array(
				'title' => 'Phonics List: ed, en, et',
			),
			'in_ip_it' => array(
				'title' => 'Phonics List: in, ip, it',
			),
		),
	),

);
