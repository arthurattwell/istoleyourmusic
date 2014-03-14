			<!-- Here is the pledge form. -->
            <form method="post" action="">
				<h2>Make a pledge</h2>
                    <div class="form-field">
                        <label>Artist's name</label>
                        <br />
                        <input type="text" id="artist_name" name="artist_name" placeholder="E.g. Beyonce" value="<?php echo $artist_name;?>" />
                            <div class="form-error-message"><?php echo $artist_name_error;?></div>
                        <br />
                    </div>
                    <div class="form-field">
                        <label>Artist's website</label>
                        <div class="label-fineprint">(Shows I've tried, and confirms which artist I mean.)</div>
                        <input type="text" id="artist_site" name="artist_site" placeholder="E.g. www.beyonce.com" value="<?php echo filter_var($artist_site, FILTER_SANITIZE_URL);?>" />
                            <div class="form-error-message"><?php echo $artist_site_error;?></div>
                        <br />
                    </div>
                    <div class="form-field">
                        <label>I pledge $</label>
                        <input type="text" id="pledge_amount" name="pledge_amount" placeholder="10" value="<?php echo $pledge_amount;?>" /> to the artist's chosen charity.
                            <div class="form-error-message"><?php echo $pledge_amount_error;?></div>
                        <br />
                    </div>
                    <div class="form-field">
                        <label>My name</label>
                        <br />
                        <div class="label-fineprint">(Real name or nickname. May be displayed publicly with my pledge.)</div>
                        <input type="text" id="nickname" name="nickname" value="<?php echo $nickname;?>" />
                            <div class="form-error-message"><?php echo $nickname_error;?></div>
                        <br />
                    </div>
                    <div class="form-field">
                        <label>My email address</label>
                        <br />
                        <div class="label-fineprint">(Only to hear when it's time to pay my pledge. No spam, never public.)</div>
                        <input type="text" id="email_address" name="email_address" value="<?php echo filter_var($email_address, FILTER_SANITIZE_EMAIL);?>" />
                            <div class="form-error-message"><?php echo $email_address_error;?></div>
                        <br />
                    </div>
                    <div class="form-field">
                        <label>My email address again, to make sure</label>
                        <br />
                        <input type="text" id="confirm_email" name="confirm_email" value="<?php echo filter_var($confirm_email, FILTER_SANITIZE_EMAIL);?>" />
                            <div class="form-error-message"><?php echo $confirm_email_error;?></div>
                        <br />
                    </div>
                    <div class="form-field">
                        <label>I promise I'll pay this pledge when it's due.</label>
                        <br />
                    </div>
                    <div class="form-field">
                        <input type="submit" class="button" name="submit" value="Pledge" />
                    </div>
            </form>