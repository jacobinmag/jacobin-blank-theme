<?php
/**
 * The main template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Jacobin
 * @since 0.0.1
 * @version 0.0.2
 */
$admin_url = get_admin_url();
?>

<meta content="0; URL='<?php echo esc_url( $admin_url ); ?>''" http-equiv"refresh">

<script type="text/javascript">
  window.location = '<?php echo esc_url( $admin_url ); ?>';
</script>
