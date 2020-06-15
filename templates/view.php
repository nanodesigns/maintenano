<?php
/**
 * Maintenano: The Front End View Template.
 *
 * This template file is responsible for the view of the frontend
 * while the maintenance mode is active.
 *
 * If you want to change the default view, you can intercept from
 * the theme with {your_theme}/maintenano/view.php or you can
 * use the filter hook to show your desired template.
 *
 * RECOMMENDATION:
 * Don't forget to add proper status header[s] in your template.
 *
 * @package  Maintenano
 * @category Templates
 * @author   Mayeenul Islam, nanodesigns
 */

// Set proper status.
status_header( 503, '503: Service Unavailable' );
nocache_headers();

// Get the necessary information.
$site_title       = get_bloginfo( 'title' );
$site_description = get_bloginfo( 'description' );
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="h-100">

	<head>

		<meta charset="<?php esc_attr( bloginfo( 'charset' ) ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php _e( 'Site under Maintenance', 'maintenano' ); ?> &bull; <?php echo $site_title; ?></title>

		<?php
		if ( function_exists( 'wp_site_icon' ) ) {
			wp_site_icon();
		}
		?>

		<meta name="description" content="<?php echo esc_attr( $site_description ); ?>" />

		<meta http-equiv="X-UA-Compatible" content="" />
		<meta property="og:site_name" content="<?php echo esc_attr( $site_title ) . ' - ' . esc_attr( $site_description ); ?>" />
		<meta property="og:title" content="<?php _e( 'Site under Maintenance', 'maintenano' ); ?>" />
		<meta property="og:description" content="<?php _e( 'Site is under Maintenance. Please check back later.', 'maintenano' ); ?>" />
		<meta property="og:type" content="Maintenance" />
		<meta property="og:url" content="<?php echo esc_url( site_url() ); ?>" />

		<link rel="pingback" href="<?php esc_url( bloginfo( 'pingback_url' ) ); ?>" />

		<style type="text/css">
			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
			}

			body {
				font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
				font-size: 18px;
				background-color: orange;
				background-image: linear-gradient(orange, darkorange);
				color: #333;
			}

			a {
				color: #333;
			}

			.h-100 {
				height: 100%;
			}

			.text-center {
				text-align: center;
			}

			.text-uppercase {
				text-transform: uppercase;
			}

			.font-weight-normal {
				font-weight: 300;
			}

			.font-weight-bold {
				font-weight: 700;
			}

			.h1 {
				font-size: 30px;
			}

			.h5 {
				font-size: 20px;
			}

			.text-dim {
				color: #ededed;
			}

			.mt-5 {
				margin-top: 50px;
			}

			.mb-2 {
				margin-bottom: 20px;
			}

			.mb-5 {
				margin-bottom: 50px;
			}

			.d-flex-center {
				display: flex;
				align-items: center;
				justify-content: center;
			}

			.container {
				width: 95%;
				max-width: 1280px;
				margin-left: auto;
				margin-right: auto;
			}

			.site-title {
				font-size: 20px;
			}

			.site-description {
				font-size: 18px;
			}

			.main-container {
				display: inline-block;
				padding: 20px;
				background-color: rgba(0, 0, 0, 0.05);
				color: #852306;
				border: 2px solid #852306;
				margin-left: auto;
				margin-right: auto;
				border-radius: 10px;
			}
		</style>

	</head>

	<body <?php body_class( 'maintenance h-100' ); ?>>
		<div class="d-flex-center h-100">
			<div class="container text-center">
				<header class="site-header mb-5">
					<hgroup>
						<h1 class="site-title"><?php echo $site_title; ?></h1>
						<h2 class="site-description font-weight-normal"><?php echo $site_description; ?></h2>
					</hgroup>
				</header>
				<main class="main-container">
					<h3 class="h1 mb-2 text-uppercase">~ <?php _e( 'Site under Maintenance', 'maintenano' ); ?> ~</h3>
					<p class="h5"><?php _e( 'We&rsquo;re assuring your best experience, and it&rsquo;s taking a while', 'maintenano' ); ?></p>
					<p class="h5"><?php _e( 'We&rsquo;re extremely sorry for your inconvenience', 'maintenano' ); ?></p>
				</main>
				<footer class="site-footer mt-5">
					&copy; <?php echo date( 'Y' ); ?> <a href="https://nanodesignsbd.com/" target="_blank" rel="noopener"><span class="font-weight-bold">nano</span>designs</a>
				</footer>
			</div>
		</div>
	</body>

</html>
