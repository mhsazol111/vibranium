            </div>
            <!-- Main Body Area Ended -->
            
            <!-- Main Footer started -->
            <div id="vbm_main-footer">
                <div class="container">
                    <h1>this is the footer</h1>
                    <?php if(is_active_sidebar( 'sidebar-2' )) {
                        dynamic_sidebar( 'sidebar-2' );
                    } ?>
                </div>
            </div>
            <!-- Main Footer ended -->

        </div>
        <!-- Page Container ended -->
        <?php wp_footer(); ?>
    </body>
</html>