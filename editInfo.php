<form action = "saveinfo.php" method = "POST" name="editform">
										<div class="row gtr-50">
										<?php if (isset ($_GET["signup"]) && !$_GET["signup"]): ?>
												<div class="col-12">
													<p class="erroremail" style="color: red;" id="erroremail">This email already exists. Please choose another one.</p>
												</div>
										<?php endif; ?>

											<div class="col-6 col-12-mobile">
												First name
												<input type="text" name="firstname" placeholder="First Name"/>
											</div>
											<div class="col-6 col-12-mobile">
												Last name
												<input type="text" name="lastname" placeholder="Last Name" />
											</div>
											<div class="col-12">
												Email
												<input type="text" name="email" placeholder="Email" />
											</div>
											<div class="col-12">
												Address
												<input type="text" name="address" placeholder="Address" />
											</div>
											<div class="col-6 col-12-mobile">
												City
												<input type="text" name="city" placeholder="City" />
											</div>
											<div class="col-6 col-12-mobile">
												State <br />
												<select name="state">
													<option value="">Select state</option>
													<option value="AL">Alabama</option>
													<option value="AK">Alaska</option>
													<option value="AZ">Arizona</option>
													<option value="AR">Arkansas</option>
													<option value="CA">California</option>
													<option value="CO">Colorado</option>
													<option value="CT">Connecticut</option>
													<option value="DE">Delaware</option>
													<option value="DC">District Of Columbia</option>
													<option value="FL">Florida</option>
													<option value="GA">Georgia</option>
													<option value="HI">Hawaii</option>
													<option value="ID">Idaho</option>
													<option value="IL">Illinois</option>
													<option value="IN">Indiana</option>
													<option value="IA">Iowa</option>
													<option value="KS">Kansas</option>
													<option value="KY">Kentucky</option>
													<option value="LA">Louisiana</option>
													<option value="ME">Maine</option>
													<option value="MD">Maryland</option>
													<option value="MA">Massachusetts</option>
													<option value="MI">Michigan</option>
													<option value="MN">Minnesota</option>
													<option value="MS">Mississippi</option>
													<option value="MO">Missouri</option>
													<option value="MT">Montana</option>
													<option value="NE">Nebraska</option>
													<option value="NV">Nevada</option>
													<option value="NH">New Hampshire</option>
													<option value="NJ">New Jersey</option>
													<option value="NM">New Mexico</option>
													<option value="NY">New York</option>
													<option value="NC">North Carolina</option>
													<option value="ND">North Dakota</option>
													<option value="OH">Ohio</option>
													<option value="OK">Oklahoma</option>
													<option value="OR">Oregon</option>
													<option value="PA">Pennsylvania</option>
													<option value="RI">Rhode Island</option>
													<option value="SC">South Carolina</option>
													<option value="SD">South Dakota</option>
													<option value="TN">Tennessee</option>
													<option value="TX">Texas</option>
													<option value="UT">Utah</option>
													<option value="VT">Vermont</option>
													<option value="VA">Virginia</option>
													<option value="WA">Washington</option>
													<option value="WV">West Virginia</option>
													<option value="WI">Wisconsin</option>
													<option value="WY">Wyoming</option>
												</select>
											</div>
											<div class="col-6 col-12-mobile">
												Zipcode
												<input type="text" name="zipcode" id="zipcode" placeholder="Zipcode" />
											</div>
											<div class="col-12">
												Password
												<input type="password" name="password" id="password" placeholder="Password" />
											</div>
											<div class="col-12">
												Confirm password
												<input type="password" name="confirmpassword" placeholder="Confirm Password" />
											</div>
											<div class="col-12">
												<ul class="buttons">
													<li><input type="submit" class="special" value="Signup" /></li>
												</ul>
											</div>
										</div>
									</form>
