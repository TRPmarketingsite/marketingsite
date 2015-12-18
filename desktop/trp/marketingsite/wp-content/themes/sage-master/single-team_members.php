<?php
/* Template Name: Single Team Members */
?>
<?php
$team_members = new WP_Query(
    array(	'post_type' => 'team_member',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'DESC'
    )
);
while ($team_members->have_posts()) : $team_members->the_post();
    $member_title = get_post_meta( $post->ID, 'trp-team-member-title', true);
    $member_bio = get_post_meta( $post->ID, 'trp-team-member-bio', true );
    $member_pic = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
<section class="profile-page">
    <div class="trp-template-header">
        <div class="trp-template-header-content container">
            <div class="row">
                <div class="col-md-12">
                    <h1>
                        <?php  $title = get_post_meta( $post->ID, 'title', true);?>
                        Dr. Alan Abrams MD, MPH
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="trp-team-nav">
        <div class="container">
            <a href="#members">Team</a>
            <a href="#advisors">Advisors</a>
        </div>
    </div>
    <div class="trp-page-body">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="avatar-content">
                        <p>
                            <img src="http://therightplace.wpengine.com/wp-content/uploads/2015/12/alan-abrams-300x300.png" alt="">
                        </p>
                        <span>Dr. Alan Abrams MD, MPH</span>
                        <p>Co-Founder</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="text-area">
                        <h2>
                            Dr. Abrams is the Chief Medical Officer of Beth Israel Deaconess Medical Center ACO in Boston, MA.
                            He is a faculty member at Harvard Medical School and Former Director of the Harvard Geriatric Fellowship Program.
                        </h2>
                        <p>
                            Dr. Abrams has continuously held an academic appointment while managing a large primary care geriatric practice at Cambridge Health Alliance.
                            Dr. Abrams was awarded Physician of the Year Award from the National Association of Home Care in 1993 and was instrumental in
                            his hospital winning the Foster-Magaw Award from the American Hospital Association. Dr. Abrams is a delegate to the 2015 White
                            House Conference on Aging and a Certified Medical Director by the American Medical Director’s Association. Dr. Abrams holds an
                            MPH from Harvard School of Public Health in Boston and a MD from New York University School of Medicine. He completed his residency
                            at the Cambridge Hospital in Cambridge, Massachusetts and fellowship in geriatrics at Harvard Medical School.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="trp-team-widget">

    </div>
</section>