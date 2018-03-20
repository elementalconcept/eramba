<?php // Template Name: Enterprise Subscriptions ?>
<?php
get_header();
?>

<div class="jumbo-box full-size light-blue">
	<div class="container">
		<div class="row align-row vertical-align-row">
			<div class="col-sm-7 text-wrapper">

				<p class="partnerships-text">
		Eramba comes in two versions, our community which you can download for free but includes no support other than our public documentation 
		and our enterprise version, which
		includes additional features, monthly updates and support from the core team.
				</p>
                <p class="partnerships-text small">
		The income generated from these services is what keeps this project alive. We re-invest %100 back into this project, we have no intention to become yet another GRC company.
                </p>
			</div>
			<div class="col-sm-5 text-center img-wrapper full-size">
				<img src="<?php echo do_shortcode('[img]'); ?>enterprise-services.png" alt="">
			</div>
		</div>
	</div>
</div>
<div class="container">
    <h2 class="margin-top-40 margin-bottom-40">
        <strong>Enterprise Subscription Package</strong>
    </h2>
    <div class="row align-row">
        <div class="col-sm-4">
            <div class="doc-box doc-box-alt doc-box-partnerships doc-box-plus align-col">
                <div class="doc-box-img">
                    <img src="<?php echo do_shortcode('[img]'); ?>enterprise-icons/shield-colored.png" alt="">
                </div>
                <div class="doc-box-content">
                    <h4>Enterprise Release</h4>
                    <p>
			Includes our latest features and patches. In open-code format which you can deploy on-premises or cloud.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="doc-box doc-box-alt doc-box-partnerships doc-box-plus align-col">
                <div class="doc-box-img">
                    <img src="<?php echo do_shortcode('[img]'); ?>enterprise-icons/installation.png" alt="">
                </div>
                <div class="doc-box-content">
                    <h4>Help to Install</h4>
                    <p>
			If Linux is not your thing - as an enterprise customer you will get remote assistance to install and update eramba.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="doc-box doc-box-alt doc-box-partnerships align-col">
                <div class="doc-box-img">
                    <img src="<?php echo do_shortcode('[img]'); ?>enterprise-icons/training.png" alt="">
                </div>
                <div class="doc-box-content">
                    <h4>Online Trainings</h4>
                    <p>
			On top of our documentation, every month or so we run online, instructor led training that will help you and/or your team(s) understand the system in detail.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="doc-box doc-box-alt doc-box-partnerships doc-box-plus align-col">
                <div class="doc-box-img">
                    <img src="<?php echo do_shortcode('[img]'); ?>enterprise-icons/support.png" alt="">
                </div>
                <div class="doc-box-content">
                    <h4>Support</h4>
                    <p>
			Questions? Bug Reports? Feature Requests? We offer unlimited email support to help you get going with eramba.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="doc-box doc-box-alt doc-box-partnerships align-col">
                <div class="doc-box-img">
                    <img src="<?php echo do_shortcode('[img]'); ?>enterprise-icons/upgrades.png" alt="">
                </div>
                <div class="doc-box-content">
                    <h4>Software Updates</h4>
                    <p>
			While community users get one update a year, as an enterprise customer you will get monthly updates with features and bug resolutions.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="doc-box doc-box-alt align-col">
                <div class="doc-box-content">
                    <div class="box-jumbo margin-top-40 margin-bottom-40">
                        <strong>2500 EUR</strong> / Year
                    </div>
                    <a href="http://www.eramba.org/resources/bugs-features/" class="btn btn-blue width-90">Get a Quote</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function(){
        function alignCols() {
            $('.align-row').each(function() {
                var height = 0;
                $(this).find('.align-col').each(function() {
                    if ($(this).height() > height) {
                        height = $(this).height();
                    }
                });
                $(this).find('.align-col').height(height);
            });
        }

        $(window).on("load", function($) {
            alignCols();
        });

    });
</script>
<?php get_footer(); ?>
