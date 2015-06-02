<div>
        <div id="reveal">
            <!-- Triggers the modals -->
            <a href="#" data-reveal-id="vidModal" class="radius button medium-6 columns">Computer Basics Video&hellip;</a>
            <a href="#" data-reveal-id="vid2Modal" class="radius button medium-6 columns">Internet Basics&hellip;</a>
            <a href="#" data-reveal-id="OSModal" class="radius button medium-6 columns">Operating Systems&hellip;</a>
            <a href="#" data-reveal-id="EmailModal" class="radius button medium-6 columns">Email Basics&hellip;</a>
              <!-- Triggers the modals -->
        <a href="#" data-reveal-id="firstModal" class="radius button">Modal in a modal&hellip;</a>
        <a href="#" data-reveal-id="videoModal" class="radius button">Example Modal with Video&hellip;</a>
        </div>
    </div>
    <div class="main-modal">
        <!-- Begin Video Modal -->
        <div id="vidModal" class="reveal-modal" data-reveal>
            <h3>What is a computer?</h3>
            <div>
                <iframe src="https://www.youtube.com/embed/7cXEOWAStq4?feature=player_embedded" allowfullscreen></iframe>
            </div>
            <a class="close-reveal-modal">&#215;</a>
        </div>
        <div id="vid2Modal" class="reveal-modal" data-reveal>
            <h3>Internet Basics</h3>
            <div>
                <iframe src="https://www.youtube.com/embed/FxirRVJWUTs?feature=player_embedded" allowfullscreen></iframe>
            </div>
            <a class="close-reveal-modal">&#215;</a>
        </div>
        <div id="OSModal" class="reveal-modal" data-reveal>
            <h3>Operating Systems</h3>
            <div>
                <iframe src="https://www.youtube.com/embed/pTdSs8kQqSA?feature=player_embedded" allowfullscreen></iframe>
            </div>
            <a class="close-reveal-modal">&#215;</a>
        </div>
        <div id="EmailModal" class="reveal-modal" data-reveal>
            <h3>Email Basics</h3>
            <div>
                <iframe src="https://www.youtube.com/embed/pTdSs8kQqSA?feature=player_embedded" allowfullscreen></iframe>
                <p><a href="#" data-reveal-id="secondModal" class="secondary button"><i class="fi-anchor"></i>Email Basics</a>
                    <a class="close-reveal-modal">&#215;</a>
            </div>

            <div id="secondModal" class="reveal-modal" data-reveal aria-labelledby="secondModalTitle" aria-hidden="true" role="dialog">
                <h2 id="secondModalTitle">Email Basics Two.</h2>
                <i class="fi-social-windows"></i>
                <p class="lead">Most software applications have many similarities, such as, email and MS Word. Learn how to create your own gmail or yahoo account and add an email manager so you can create or modify an email offline.</p>
                <p>Writing an email is similar to creating a MS Word document. It has the same basic foundations, just some different commands and features, but you will find that understanding the similarities will enable you to learn a new software application a lot quicker and it will no longer be intimidating. </p>
                <div>
                    <iframe src="https://www.youtube.com/embed/pTdSs8kQqSA?feature=player_embedded" allowfullscreen></iframe>
                    <p><a href="#" data-reveal-id="secondModal" class="secondary button"><i class="fi-anchor"></i>Software Basics</a>
                        <a class="close-reveal-modal" aria-label="Close">&#215;</a>
                    </p>
                </div>
            </div>
            <!-- Reveal Modals end -->
        </div>
        <!-- Triggers the modals -->
        <a href="#" data-reveal-id="firstModal" class="radius button">Modal in a modal&hellip;</a>
        <a href="#" data-reveal-id="videoModal" class="radius button">Example Modal with Video&hellip;</a>

        <!-- Reveal Modals begin -->
        <div id="firstModal" class="reveal-modal" data-reveal aria-labelledby="firstModalTitle" aria-hidden="true" role="dialog">
            <h2 id="firstModalTitle">This is a modal.</h2>
            <p>Reveal makes these very easy to summon and dismiss. The close button is simply an anchor with a unicode character icon and a class of <code>close-reveal-modal</code>. Clicking anywhere outside the modal will also dismiss it.</p>
            <p>Finally, if your modal summons another Reveal modal, the plugin will handle that for you gracefully.</p>
            <p><a href="#" data-reveal-id="secondModal" class="secondary button">Second Modal...</a>
            </p>
            <a class="close-reveal-modal" aria-label="Close">&#215;</a>
        </div>

        <div id="secondModal" class="reveal-modal" data-reveal aria-labelledby="secondModalTitle" aria-hidden="true" role="dialog">
            <h2 id="secondModalTitle">This is a second modal.</h2>
            <p>See? It just slides into place after the other first modal. Very handy when you need subsequent dialogs, or when a modal option impacts or requires another decision.</p>
            <a class="close-reveal-modal" aria-label="Close">&#215;</a>
        </div>

        <div id="videoModal" class="reveal-modal large" data-reveal aria-labelledby="videoModalTitle" aria-hidden="true" role="dialog">
            <h2 id="videoModalTitle">This modal has video</h2>
            <div class="flex-video widescreen vimeo">
                <iframe width="1280" height="720" src="//www.youtube-nocookie.com/embed/wnXCopXXblE?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>

            <a class="close-reveal-modal" aria-label="Close">&#215;</a>
        </div>
        <!-- Reveal Modals end -->
