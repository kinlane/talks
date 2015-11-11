
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <title>The API Lifecycle</title>

    <meta name="description" content="A walk through the history of APIs, API design & planning, API development, API evangelism and whats next when it comes to APIs.">
    <meta name="author" content="Kin Lane">

    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="http://kinlane.github.com/talks/stylesheets/main.css">
    <link rel="stylesheet" href="http://kinlane.github.com/talks/stylesheets/theme/default.css" id="theme">

    <style type="text/css">
		.wordcloud {
			border: 0px solid #000;
			height: 3in;
			margin: 0.1in auto;
			padding: 0;
			page-break-after: always;
			page-break-inside: avoid;
			width: 6in;
		}
    </style>

</head>

        <body>

            <div class="reveal">

                <!-- Used to fade in a background when a specific slide state is reached -->
                <div class="state-background"></div>

                <!-- Any section element inside of this container is displayed as a slide -->
                <div class="slides">

                      <section>
                      <p><br /></p>
                      <p><br /></p>
                      <p><strong>Kin Lane</strong></p>
                      <p><strong>API Evangelist</strong></p>
                      <p><br /></p>
                      <p><br /></p>
                      <h3>The API Lifecycle</h3>
                      <p><br /></p>
                      <p><br /></p>
                      <p style="font-size: 20px; fong-weight: bold;">November 2015</p>
                      </section>

                      <section>
  		            			<p><br /></p>
                        <p><br /></p>
                        <p><br /></p>
                        <p><br /></p>
  		            			<p><img src="http://kinlane-productions.s3.amazonaws.com/api-evangelist/api-evangelist-logo-400.png" width="550" /></p>
  		                </section>

                      <section>
  		            			<p><br /></p>
                        <p><br /></p>
                        <p><br /></p>
                        <p><br /></p>
  		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/compute-1940s.jpg" width="550" /></p>
                        <p><strong>1940s</strong>
  		                </section>

                      <section>
  		            			<p><br /></p>
                        <p><br /></p>
                        <p><br /></p>
  		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/compute-1950s.jpg" width="650" /></p>
                        <p><strong>1950s</strong>
  		                </section>

                      <section>
  		            			<p><br /></p>
                        <p><br /></p>
                        <p><br /></p>
  		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/compute-1960s.jpg" width="550" /></p>
                        <p><strong>1960s</strong>
  		                </section>

                      <section>
  		            			<p><br /></p>
                        <p><br /></p>
                        <p><br /></p>
  		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/compute-1970s.jpg" width="550" /></p>
                        <p><strong>1970s</strong>
  		                </section>


                      <section>
  		            			<p><br /></p>
                        <p><br /></p>
  		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/compute-1980s.jpg" width="550" /></p>
                        <p><strong>1980s</strong>
  		                </section>

                      <section>
                        <p><br /></p>
  		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/compute-1990s.png" width="500" /></p>
                        <p><strong>1990s</strong>
  		                </section>

                      <section>
  		            			<p><br /></p>
                        <p><br /></p>
                        <p><br /></p>
                        <p><br /></p>
  		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/compute-2000s.jpeg" width="550" /></p>
                        <p><strong>2000s</strong>
  		                </section>

                      <section>
                        <p><br /></p>
                        <p><br /></p>
  		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/compute-2010s.png" width="550" /></p>
                        <p><strong>2010s</strong>
  		                </section>

                      <!-- I am just henry beck-->
                      <section>
                        <p><br /></p>
  		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/henry-beck.jpg" width="450" /></p>
                        <p><strong>Henry Beck</strong>
  		                </section>

                      <section>
  		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/Beck_Map_1933.jpg" width="800" /></p>
                        <p><strong>Beck Map</strong>
  		                </section>

                      <section>
  		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/1889small.jpg" width="700" /></p>
                        <p><strong>1898</strong>
  		                </section>

                      <section>
                        <p><br /></p>
  		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/1902small.jpg" width="900" /></p>
                        <p><strong>1902</strong>
  		                </section>

                      <section>
                        <p><br /></p>
  		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/api-lifecycle-tag-cloud.png" width="1000" /></p>
  		                </section>

                      <!-- Start Generated--->

                                			<section>
											<table style="margin-left: 475px; margin-top: 100px;" cellspacing="5">
												<tr>
													<td style="vertical-align: middle; padding: 25px;">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-design.png" width="150" style="padding: 15px;" />
													</td>
													<td style="font-size: 75px; font-weight: bold; vertical-align: middle;">
															Design													</td>
												</tr>
												<tr>
													<td colspan="2">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
														<div style="width: 100%; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #0039A6">
														<div>
													</td>
												</tr>
											</table>
										</section>
              			                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #0039A6"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Design															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Best Practices</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Use the Web</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Simplicity</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Consistency</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Easy to Read</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Easy to Learn</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Hard to Misuse</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Audience Focused</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Experience Over Resource</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Use Your Own APIs</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #0039A6"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Design															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Core Design</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">SSL</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Host</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Resource</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Action</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Verbs</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Parameters</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Headers</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Body</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Versioning</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Pagination</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Filtering</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Sorting</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Field Selection</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #0039A6"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Design															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Response</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Status Codes</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Error Handling</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Rate Limits</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Caching</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">eTags</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request-Ids</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">UTF-8</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">CORS</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">JSONP</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #0039A6"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Design															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Media Types</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">application/json</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">application/xml</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">application/csv</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">text/html</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">application/atom+xml</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #0039A6"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Design															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Open Standards</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">JSON Schema</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">iCalendar</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">vCard</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">KML</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">geoRSS</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">m3u</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">UUID</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">ISO 8601 (Date / Time)</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">ISO 4217 (Currency)</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">ISO 3166 (Country)</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">RDFa</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Schema.org</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #0039A6"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Design															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Design Process</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Definitions</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Editor</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Forkable</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Sharing</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Collaboration</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Annotation</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Translation</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Highlighting</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #0039A6"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Design															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Organization</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Guide</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Notebook</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Collections</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Dictionary</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Contact</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #0039A6"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Design															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Internationalization</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Accept-Language</li>
	        																							</ul>
													</section>

												              			<section>
											<table style="margin-left: 475px; margin-top: 100px;" cellspacing="5">
												<tr>
													<td style="vertical-align: middle; padding: 25px;">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-hypermedia.png" width="150" style="padding: 15px;" />
													</td>
													<td style="font-size: 75px; font-weight: bold; vertical-align: middle;">
															Hypermedia													</td>
												</tr>
												<tr>
													<td colspan="2">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
														<div style="width: 100%; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #FF6319">
														<div>
													</td>
												</tr>
											</table>
										</section>
              			                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #FF6319"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Hypermedia															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Core Concepts</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Target Identification</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Link Relation Type</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Human-Readable Label(s)</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Target Resource Hints</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Traversal Hints</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Topology</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Directionality</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Resource Role</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #FF6319"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Hypermedia															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Hypermedia Formats</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Collection+JSON</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Extensible Markup Language (XML)</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Home Documents</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Hydra</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Hypertext Application Language (HAL)</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">JSON API</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Mason</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Noun As Resource With HyperLinks (NARWHL)</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Siren</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Uniform Basis for Exchanging Representations (UBER)</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">XForms</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">XML Inclusions (XInclude)</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">XML Linking Language (XLink)</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">xml:id</li>
	        																							</ul>
													</section>
												              			<section>
											<table style="margin-left: 475px; margin-top: 100px;" cellspacing="5">
												<tr>
													<td style="vertical-align: middle; padding: 25px;">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-api-definitions.png" width="150" style="padding: 15px;" />
													</td>
													<td style="font-size: 75px; font-weight: bold; vertical-align: middle;">
															Definition													</td>
												</tr>
												<tr>
													<td colspan="2">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
														<div style="width: 100%; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #6CBE45">
														<div>
													</td>
												</tr>
											</table>
										</section>
              			                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #6CBE45"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Definition															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> API Definition</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Translator</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Specification</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Generator</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Parser</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Validator</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Schema</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Converter</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Database</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Command-Line</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Powershell</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Aggregator</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Editors</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">IDE Plugin</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Forms</li>
	        																							</ul>
													</section>
												              			<section>
											<table style="margin-left: 475px; margin-top: 100px;" cellspacing="5">
												<tr>
													<td style="vertical-align: middle; padding: 25px;">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-globe.png" width="150" style="padding: 15px;" />
													</td>
													<td style="font-size: 75px; font-weight: bold; vertical-align: middle;">
															DNS													</td>
												</tr>
												<tr>
													<td colspan="2">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
														<div style="width: 100%; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #996633">
														<div>
													</td>
												</tr>
											</table>
										</section>
              			                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #996633"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	DNS															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Core DNS</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Domain</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Record</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Zone</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Registration</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Cache</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">IP Address</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Geo DNS</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #996633"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	DNS															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Stability</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Monitors</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Threat Analysis</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Whitelist / Blacklist</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Denial of Service (DDOS)</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">DNS Failover</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Latency Based Routing</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Verification</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #996633"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	DNS															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Utility</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Statistics</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Batch Requests</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Import</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Export</li>
	        																							</ul>
													</section>
												              			<section>
											<table style="margin-left: 475px; margin-top: 100px;" cellspacing="5">
												<tr>
													<td style="vertical-align: middle; padding: 25px;">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-shipping-container.png" width="150" style="padding: 15px;" />
													</td>
													<td style="font-size: 75px; font-weight: bold; vertical-align: middle;">
															Containers													</td>
												</tr>
												<tr>
													<td colspan="2">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
														<div style="width: 100%; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #A7A9AC">
														<div>
													</td>
												</tr>
											</table>
										</section>
              			                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #A7A9AC"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Containers															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Core Concepts</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Containers</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Images</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Nodes</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Volumes</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Clusters</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Networks</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Hub</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Registry</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #A7A9AC"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Containers															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> API</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Containers</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Image</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Volumes</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Networks</li>
	        																							</ul>
													</section>
												              			<section>
											<table style="margin-left: 475px; margin-top: 100px;" cellspacing="5">
												<tr>
													<td style="vertical-align: middle; padding: 25px;">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-virtulization.png" width="150" style="padding: 15px;" />
													</td>
													<td style="font-size: 75px; font-weight: bold; vertical-align: middle;">
															Virtualization													</td>
												</tr>
												<tr>
													<td colspan="2">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
														<div style="width: 100%; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #FCCC0A">
														<div>
													</td>
												</tr>
											</table>
										</section>
              			                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #FCCC0A"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Virtualization															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Core Virtualization</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Mock</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Sandbox</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Simulator</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Record</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Playback</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Verification</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Port Forwarding</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">SSL</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #FCCC0A"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Virtualization															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Data Virtualization</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Templates</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Dummy Data</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Excel Data</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #FCCC0A"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Virtualization															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Import / Export</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Import Swagger</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Import RAML</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Import Blueprint</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Import WADL</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Import Postman</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #FCCC0A"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Virtualization															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Other Elements</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Reporting</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Analytics</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Teams</li>
	        																							</ul>
													</section>
												              			<section>
											<table style="margin-left: 475px; margin-top: 100px;" cellspacing="5">
												<tr>
													<td style="vertical-align: middle; padding: 25px;">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-api-deployment-2.jpg" width="150" style="padding: 15px;" />
													</td>
													<td style="font-size: 75px; font-weight: bold; vertical-align: middle;">
															Deployment													</td>
												</tr>
												<tr>
													<td colspan="2">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
														<div style="width: 100%; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #808183">
														<div>
													</td>
												</tr>
											</table>
										</section>
              			                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #808183"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Deployment															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Deployment</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Database to API</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Framework</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Gateway</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Proxy</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Connector</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Hosting</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">JSON to API</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Scraping</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Container</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Github</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">CSV to API</li>
	        																							</ul>
													</section>
												              			<section>
											<table style="margin-left: 475px; margin-top: 100px;" cellspacing="5">
												<tr>
													<td style="vertical-align: middle; padding: 25px;">
														<img src="https://s3.amazonaws.com/kinlane-productions/api-evangelist/services/api-management.png" width="150" style="padding: 15px;" />
													</td>
													<td style="font-size: 75px; font-weight: bold; vertical-align: middle;">
															Management													</td>
												</tr>
												<tr>
													<td colspan="2">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
														<div style="width: 100%; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #EE352E">
														<div>
													</td>
												</tr>
											</table>
										</section>
              			                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #EE352E"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Management															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Onboarding</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Portal</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Getting Started</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Self-Service Registration</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Best Practices</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">FAQ</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Service Accord</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Sign Up Email</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Google Authentication</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Github Authentication</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Facebook Authentication</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Flexible Messaging Area</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #EE352E"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Management															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Documentation</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Documentation</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">List of Endpoints</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Interactive Documentation</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">API Explorer</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Error Response Codes</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #EE352E"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Management															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Authentication</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Authentication Overview</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Key Access</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Basic Auth</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">oAuth</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">OAuth Scopes</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Authentication Tester</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #EE352E"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Management															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Code Management</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Github</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Application Gallery</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Open Source</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Starter Projects</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Community Supported Libraries</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Code Builder</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Code</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">SDKs.io</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #EE352E"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Management															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Self-Service Support</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Forum</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Forum RSS</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Stack Overflow</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Knowledgebase</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #EE352E"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Management															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Direct Support</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Email</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Contact Form</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Phone</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Ticket System</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Office Hours</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Calendar</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Paid Support Plans</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #EE352E"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Management															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Communications</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Slack</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Blog</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Blog RSS Feed</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Twitter</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Email</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">LinkedIn</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Facebook</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Google+</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Email Newsletter</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Instagram</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Vimeo</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Youtube</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Chat</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #EE352E"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Management															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Updates</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Status Dashboard</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Roadmap</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Change Log</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Status RSS</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #EE352E"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Management															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Resources</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Case Studies</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">How-to Guides</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">White Papers</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Webinars</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Events</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Slideshare</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Codecademy</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Tour</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Glossary</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Videos</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #EE352E"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Management															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Research & Development</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Labs</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Ideas</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Opportunities</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #EE352E"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Management															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Legal</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Terms of Service</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Privacy Policy</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Branding</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Code License</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Data License</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Service Level Agreement</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Deprecation Policy</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Monetization Guidelines</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Compliance</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Software License</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Trademarks</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #EE352E"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Management															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Environment</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Sandbox</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Production</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Simulator</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Templates</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #EE352E"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Management															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Developer Account</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Developer Dashboard</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Account Settings</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Reset Password</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Application Manager</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Usage Logs & Analytics</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Billing History</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Message Center</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Github Authentication</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Delete Account</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Service Tier Management</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #EE352E"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Management															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Reciprocity</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Terms of Service</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Data Portability</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Automation</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">oAuth</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Integrations</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #EE352E"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Management															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Corporate</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Mission</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Team Showcase</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #EE352E"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Management															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Internationalization</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Documentation Language</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Internationalization</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #EE352E"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Management															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Management API</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">User Management</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Account Management</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Application Management</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Service Management</li>
	        																							</ul>
													</section>
												              			<section>
											<table style="margin-left: 475px; margin-top: 100px;" cellspacing="5">
												<tr>
													<td style="vertical-align: middle; padding: 25px;">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-heart-monitor.png" width="150" style="padding: 15px;" />
													</td>
													<td style="font-size: 75px; font-weight: bold; vertical-align: middle;">
															Monitoring													</td>
												</tr>
												<tr>
													<td colspan="2">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
														<div style="width: 100%; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #00933C">
														<div>
													</td>
												</tr>
											</table>
										</section>
              			                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #00933C"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Monitoring															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Core Monitoring</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Editor</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Retry</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Sharing</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Playback</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Scheduling</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Compare</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Scripting</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Automation</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Commenting</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Service Availability</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Latency Measurement</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Response Header Validation</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Response Body Validation</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #00933C"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Monitoring															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Management Monitoring</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Documentation Monitoring</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Pricing Monitoring</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Terms of Service Monitoring</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #00933C"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Monitoring															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Targeted Monitoring</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Provider Based Monitoring</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Region Based Monitoring</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Public Monitoring</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #00933C"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Monitoring															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Authentication</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Basic Auth</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">OAuth</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">API Keys</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #00933C"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Monitoring															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Utility</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Collections</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Virtualize</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Localhost</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Teams</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">API</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #00933C"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Monitoring															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Notification</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">SMS</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Email</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Phone</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Webhook</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #00933C"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Monitoring															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Import</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Postman</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Swagger</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">RAML</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">HAR</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #00933C"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Monitoring															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Reporting</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Dashboard</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Analytics</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Embeddable</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #00933C"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Monitoring															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> 3rd Party</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Slack</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">PagerDuty</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">VictorOps</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">HipChat</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Flowdock</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">OpsGenie</li>
	        																							</ul>
													</section>
												              			<section>
											<table style="margin-left: 475px; margin-top: 100px;" cellspacing="5">
												<tr>
													<td style="vertical-align: middle; padding: 25px;">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-testing.png" width="150" style="padding: 15px;" />
													</td>
													<td style="font-size: 75px; font-weight: bold; vertical-align: middle;">
															Testing													</td>
												</tr>
												<tr>
													<td colspan="2">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
														<div style="width: 100%; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #B933AD">
														<div>
													</td>
												</tr>
											</table>
										</section>
              			                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #B933AD"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Testing															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Core Testing</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Load Testing</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Response Header Inspector</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Response Body Inspector</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Retry</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Sharing</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Playback</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Scheduling</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Compare</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Scripting</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Automation</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Commenting</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Simulator</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Templates</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Data Scenarios</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #B933AD"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Testing															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Targeted Testing</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Region Based Testing</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Provider Based Testing</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #B933AD"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Testing															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Authentication</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Basic-Auth</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">API Keys</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">OAuth</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #B933AD"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Testing															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Utility</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Collections</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Command Line Interface</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Virtualization</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Teams</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">API</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #B933AD"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Testing															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Import</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Postman</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Swagger</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">RAML</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">HAR</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">JUnit XML</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #B933AD"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Testing															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> 3rd Party</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">JMeter</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Selenium</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Jenkins</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">TeamCity</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Bamboo</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Travis</li>
	        																							</ul>
													</section>
												              			<section>
											<table style="margin-left: 475px; margin-top: 100px;" cellspacing="5">
												<tr>
													<td style="vertical-align: middle; padding: 25px;">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-performance.png" width="150" style="padding: 15px;" />
													</td>
													<td style="font-size: 75px; font-weight: bold; vertical-align: middle;">
															Performance													</td>
												</tr>
												<tr>
													<td colspan="2">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
														<div style="width: 100%; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #00985F">
														<div>
													</td>
												</tr>
											</table>
										</section>
              			                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #00985F"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Performance															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Core Performance</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">CPU Usage</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Memory Usage</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Disk I/O</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Network I/O</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Editor</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Retry</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Sharing</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Playback</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Scheduling</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Compare</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Scripting</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Automation</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Commenting</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Latency Testing</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Simulator</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #00985F"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Performance															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Targeted Performance</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Region Based Testing</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Provider Based Testing</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #00985F"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Performance															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Authentication</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Basic-Auth</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">API Keys</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">OAuth </li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #00985F"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Performance															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Utility</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Collections</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Command Line Interface</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Virtualization</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Teams</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">API</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #00985F"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Performance															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Import</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Postman</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Swagger</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">RAML</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">HAR</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">JUnit XML</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #00985F"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Performance															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> 3rd Party</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">JMeter</li>
	        																							</ul>
													</section>
												              			<section>
											<table style="margin-left: 475px; margin-top: 100px;" cellspacing="5">
												<tr>
													<td style="vertical-align: middle; padding: 25px;">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-padlock.png" width="150" style="padding: 15px;" />
													</td>
													<td style="font-size: 75px; font-weight: bold; vertical-align: middle;">
															Security													</td>
												</tr>
												<tr>
													<td colspan="2">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
														<div style="width: 100%; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #4D5357">
														<div>
													</td>
												</tr>
											</table>
										</section>
              			                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #4D5357"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Security															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Auth Formats</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Basic Auth</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">OAuth</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">API Keys</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">JSON Web Token</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #4D5357"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Security															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Auth Considerations</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Session Management</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Session State</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Anti-Farming</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Protect HTTP Methods</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Methods Whitelist</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Cross-Site Request Forgery</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Insecure Direct Object References</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #4D5357"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Security															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Input Validation</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Assist the User</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Secure Parsing</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Strong Typing</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Validate Content-Types</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Validate Response Types</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">JSON Validation</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">XML Validation</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Framework-Provided Validation</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #4D5357"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Security															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Output Validation</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Send Security Headers</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">JSON Encoding</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">XML Encoding</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Link Integrity</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #4D5357"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Security															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Cryptography</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Data in Transit</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #4D5357"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Security															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Abuse of Functionality</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Buffer Overflow Attack</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Buffer Overflow via Environment Variables</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Overflow Binary Resource File</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #4D5357"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Security															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Data Structure Attacks</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Cross-Site Request Forgery (CSRF)</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Logic/time Bomb</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Trojan Horse</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Account Lockout Attack</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Cross-Site Request Forgery (CSRF)</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Execution After Redirect (EAR)</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Session Fixation</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Session Hijacking Attack</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Session Prediction</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #4D5357"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Security															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Embedded Malicious Code</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Parameter Delimiter</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Resource Injection</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Server-Side Includes (SSI) Injection</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">SQL Injection</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Web Parameter Tampering</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">XPATH Injection</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Code Injection</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Command Injection</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Comment Injection Attack</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Content Security Policy</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Content Spoofing</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">CORS RequestPreflighScrutiny</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Cross-site Scripting (XSS)</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Custom Special Character Injection</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Format String Attack</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Full Path Disclosure</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #4D5357"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Security															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Injection</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Brute Force Attack</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Cash Overflow</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Cryptanalysis </li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Denial of Service</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #4D5357"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Security															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Path Traversal Attack</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">HTTP Request Smuggling</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">HTTP Response Splitting</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Traffic Flood</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #4D5357"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Security															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Probabilistic Technique</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Asymmetric Resource Consumption</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Cash Overflow</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Denial of Service</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #4D5357"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Security															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Protocol Manipulation</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Comment Injection Attack</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Custom Special Character Injection</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Double Encoding</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Forced Browsing</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Path Traversal</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Relative Path Traversal</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Repudiation Attack</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Setting Manipulation</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Unicode Encoding</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #4D5357"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Security															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Resource Depletion</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Cash Overflow</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Cross-Site Request Forgery (CSRF)</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Man-in-the-Middle Attack</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #4D5357"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Security															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Resource Manipulation</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Certification </li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Security Visualization</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Compliance & Auditing Reporting</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Bug Bounty Program</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Endpoint Tagging</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Intrusion Correlation</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Risk Scoring</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Publish Your Page</li>
	        																							</ul>
													</section>
												              			<section>
											<table style="margin-left: 475px; margin-top: 100px;" cellspacing="5">
												<tr>
													<td style="vertical-align: middle; padding: 25px;">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-terms-of-use.png" width="150" style="padding: 15px;" />
													</td>
													<td style="font-size: 75px; font-weight: bold; vertical-align: middle;">
															Terms of Service													</td>
												</tr>
												<tr>
													<td colspan="2">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
														<div style="width: 100%; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #6E3219">
														<div>
													</td>
												</tr>
											</table>
										</section>
              			                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #6E3219"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Terms of Service															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Core Elements</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Accuracy of Information</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Security</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Opting Out</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Sites Covered</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Childrens Privacy</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Links to Non-Operators Web Sites</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Non-Personal Information</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Aggregate Information</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Log Files</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Cookies</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Web Beacons</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Personal Information</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Members-Only Web Sites</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">How We Use Your Information</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Information Sharing</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Access To Information</li>
	        																							</ul>
													</section>
												              			<section>
											<table style="margin-left: 475px; margin-top: 100px;" cellspacing="5">
												<tr>
													<td style="vertical-align: middle; padding: 25px;">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-privacy.png" width="150" style="padding: 15px;" />
													</td>
													<td style="font-size: 75px; font-weight: bold; vertical-align: middle;">
															Privacy													</td>
												</tr>
												<tr>
													<td colspan="2">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
														<div style="width: 100%; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #CE8E00">
														<div>
													</td>
												</tr>
											</table>
										</section>
              			                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #CE8E00"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Privacy															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Privacy</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">License</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Intellectual Property Rights</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Permitted and Prohibited Uses</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Use of Personally Identifiable Information</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">User Submissions</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Technical Requirements and Limitations</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">User Discussion Lists and Forums</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Liability</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Termination</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Changes</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Links to Other Materials</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Warranty Disclaimer</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Miscellaneous</li>
	        																							</ul>
													</section>
												              			<section>
											<table style="margin-left: 475px; margin-top: 100px;" cellspacing="5">
												<tr>
													<td style="vertical-align: middle; padding: 25px;">
														<img src="http://kinlane-productions.s3.amazonaws.com/api-evangelist-site/blog/bw-licensing-stack.png" width="150" style="padding: 15px;" />
													</td>
													<td style="font-size: 75px; font-weight: bold; vertical-align: middle;">
															Licensing													</td>
												</tr>
												<tr>
													<td colspan="2">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
														<div style="width: 100%; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #FF6319">
														<div>
													</td>
												</tr>
											</table>
										</section>
              			                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #FF6319"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Licensing															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Server Code</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Apache</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">GPL</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">MIT</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #FF6319"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Licensing															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Data</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Public Domain Dedication and License (PDDL)</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Attribution License (ODC-By)</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Open Database License (ODC-ODbL)</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #FF6319"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Licensing															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Content</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Attribution (CC BY)</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Attribution-ShareAlike (CC BY-SA)</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Public Domain (CC0)</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #FF6319"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Licensing															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> API</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Attribution  (CC BY)</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Attribution-ShareAlike (CC BY-SA)</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Public Domain (CC0)</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #FF6319"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Licensing															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Client Code</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Apache</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">GPL</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">MIT</li>
	        																							</ul>
													</section>
												              			<section>
											<table style="margin-left: 475px; margin-top: 100px;" cellspacing="5">
												<tr>
													<td style="vertical-align: middle; padding: 25px;">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-brand.png" width="150" style="padding: 15px;" />
													</td>
													<td style="font-size: 75px; font-weight: bold; vertical-align: middle;">
															Branding													</td>
												</tr>
												<tr>
													<td colspan="2">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
														<div style="width: 100%; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #006983">
														<div>
													</td>
												</tr>
											</table>
										</section>
              			                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #006983"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Branding															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Branding</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Use of Brand Name</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Use of Brand Logo</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Use of Product Titles</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Content Display Requirements</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Data Display Requirements</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Image Assets</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Icon Assets</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Other Assets</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Linking Requirements</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Naming Your Application</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Branding Examples</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Full Style Guide</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Give Credit</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Bring Value</li>
	        																							</ul>
													</section>
												              			<section>
											<table style="margin-left: 475px; margin-top: 100px;" cellspacing="5">
												<tr>
													<td style="vertical-align: middle; padding: 25px;">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-api-discovery.png" width="150" style="padding: 15px;" />
													</td>
													<td style="font-size: 75px; font-weight: bold; vertical-align: middle;">
															Discovery													</td>
												</tr>
												<tr>
													<td colspan="2">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
														<div style="width: 100%; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #00AF3F">
														<div>
													</td>
												</tr>
											</table>
										</section>
              			                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #00AF3F"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Discovery															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Specification</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">APIs.json</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #00AF3F"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Discovery															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Discovery</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">API Directory</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">API Hub</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">IDE Extension</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">API Explorer</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">API Questions</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #00AF3F"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Discovery															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Directory</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">ProgrammableWeb</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Mashape</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #00AF3F"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Discovery															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Business</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Crunchbase</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">AngelList</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #00AF3F"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Discovery															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Search</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">APIs.io</li>
	        																							</ul>
													</section>
												              			<section>
											<table style="margin-left: 475px; margin-top: 100px;" cellspacing="5">
												<tr>
													<td style="vertical-align: middle; padding: 25px;">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-client.png" width="150" style="padding: 15px;" />
													</td>
													<td style="font-size: 75px; font-weight: bold; vertical-align: middle;">
															Client													</td>
												</tr>
												<tr>
													<td colspan="2">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
														<div style="width: 100%; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #0039A6">
														<div>
													</td>
												</tr>
											</table>
										</section>
              			                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #0039A6"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Client															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Request Editor</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request URL Editor</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Headers Editor</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Cookies Manager</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Method Manager</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Request Body Editor</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #0039A6"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Client															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Authentication</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Basic Auth</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Digest Auth</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">OAuth 1.0</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">OAuth 2.0</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #0039A6"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Client															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Environment</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Separate Environments</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Saved Variables</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #0039A6"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Client															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Response Viewer</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Save Requests</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">XML Viewer</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">JSON Viewer</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">RAW Viewer</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Search</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #0039A6"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Client															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Organization</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Collections</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Templates</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Clone Requests</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Record</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Replay</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Keyboard Shortcuts</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">History</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Teams</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #0039A6"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Client															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Import / Export</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Import Swagger</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Import API Blueprint</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Import RAML</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Import Postman</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Export Postman </li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Export Swagger</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Export API Blueprint</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Export RAML</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #0039A6"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Client															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Tooling</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Command Line</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Codegen</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Proxy</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Extensions</li>
	        																							</ul>
													</section>
												              			<section>
											<table style="margin-left: 475px; margin-top: 100px;" cellspacing="5">
												<tr>
													<td style="vertical-align: middle; padding: 25px;">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-ide.png" width="150" style="padding: 15px;" />
													</td>
													<td style="font-size: 75px; font-weight: bold; vertical-align: middle;">
															IDE													</td>
												</tr>
												<tr>
													<td colspan="2">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
														<div style="width: 100%; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #C60C30">
														<div>
													</td>
												</tr>
											</table>
										</section>
              			                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #C60C30"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	IDE															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Core Elements</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Workspace</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Project</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Worker</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Container</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Resources</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Analytics</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Environment</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Github</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Editor(s)</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Plugins</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Autocomplete</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Themes</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Customize</li>
	        																							</ul>
													</section>
												              			<section>
											<table style="margin-left: 475px; margin-top: 100px;" cellspacing="5">
												<tr>
													<td style="vertical-align: middle; padding: 25px;">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-sdk.png" width="150" style="padding: 15px;" />
													</td>
													<td style="font-size: 75px; font-weight: bold; vertical-align: middle;">
															SDK													</td>
												</tr>
												<tr>
													<td colspan="2">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
														<div style="width: 100%; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #A626AA">
														<div>
													</td>
												</tr>
											</table>
										</section>
              			                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #A626AA"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	SDK															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Generate</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">C#</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Objective-C</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Java for Android</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Java for JVM</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">PHP</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Python</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">AngularJS</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Ruby</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Node.js</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Go</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Scala</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">ActionScript</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Swift</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #A626AA"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	SDK															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Import / Export</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Import Swagger</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Import RAML</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Import Blueprint</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Import WADL</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Import Postman</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #A626AA"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	SDK															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Discovery</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">List SDK</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Search SDK</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Browse SDK</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Rating</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #A626AA"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	SDK															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Mobile Management</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Mobile Overview</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">iOS SDK</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Android SDK</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">HTML5</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Appery.io</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Windows Mobile SDK</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #A626AA"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	SDK															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Code - Platform Development Kits (PDK)</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Wordpress</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Heroku</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Drupal</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">SalesForce</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Joomla</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Google App Engine</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Chrome Extension</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Firefox Add-On</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #A626AA"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	SDK															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Single Page Applications (SPA)</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Angular.js</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">React.js</li>
	        																							</ul>
													</section>
												              			<section>
											<table style="margin-left: 475px; margin-top: 100px;" cellspacing="5">
												<tr>
													<td style="vertical-align: middle; padding: 25px;">
														<img src="https://s3.amazonaws.com/kinlane-productions/api-evangelist/services/bw-embeddable.png" width="150" style="padding: 15px;" />
													</td>
													<td style="font-size: 75px; font-weight: bold; vertical-align: middle;">
															Embeddable													</td>
												</tr>
												<tr>
													<td colspan="2">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
														<div style="width: 100%; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #00A1DE">
														<div>
													</td>
												</tr>
											</table>
										</section>
              			                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #00A1DE"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Embeddable															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Embed Formats</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Open Graph Protocol</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">oEmbed</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #00A1DE"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Embeddable															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Embeddable Tools</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Bookmarklet</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Widgets</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Badges</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Buttons</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #00A1DE"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Embeddable															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Embed Engines</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Widget Builder</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">JavaScript API</li>
	        																							</ul>
													</section>
												              			<section>
											<table style="margin-left: 475px; margin-top: 100px;" cellspacing="5">
												<tr>
													<td style="vertical-align: middle; padding: 25px;">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/webhooks.png" width="150" style="padding: 15px;" />
													</td>
													<td style="font-size: 75px; font-weight: bold; vertical-align: middle;">
															Webhooks													</td>
												</tr>
												<tr>
													<td colspan="2">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
														<div style="width: 100%; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #0039A6">
														<div>
													</td>
												</tr>
											</table>
										</section>
              			                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #0039A6"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Webhooks															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Core</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">URL</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Payload</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Event</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Content Type</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #0039A6"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Webhooks															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Inbound</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Webhooks Targets</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #0039A6"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Webhooks															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Outbound</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Multiple Destinations</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">CRON Jobs</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #0039A6"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Webhooks															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Utilities</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Transformations</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Scripting</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Retry</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #0039A6"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Webhooks															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Operations</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Analytics</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Emails</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Logging</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Alerts</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Simulator</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #0039A6"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Webhooks															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> 3rd Party Integration</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Github</li>
	        																							</ul>
													</section>
												              			<section>
											<table style="margin-left: 450px; margin-top: 100px;" cellspacing="5">
												<tr>
													<td style="vertical-align: middle; padding: 25px;">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-gears-questions.png" width="150" style="padding: 15px;" />
													</td>
													<td style="font-size: 75px; font-weight: bold; vertical-align: middle;">
															Monetization													</td>
												</tr>
												<tr>
													<td colspan="2">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
														<div style="width: 100%; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #009B3A">
														<div>
													</td>
												</tr>
											</table>
										</section>
              			                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #009B3A"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Monetization															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Acquisition</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Discover </li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Negotiate</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Licensing </li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Purchase</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #009B3A"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Monetization															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Development</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Investment</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Grant</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Normalization</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Design</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Database</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Server</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Coding</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">DNS</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #009B3A"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Monetization															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Operation</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Definition</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Compute</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Storage</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Bandwidth</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Management</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Code</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Evangelism</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Monitoring</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Security</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Virtualization</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #009B3A"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Monetization															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Access Levels</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Free</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Free Trial</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Not For Profit</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Educational Access</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Tier(s)</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Public</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Retail</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Trusted</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Education</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Partner</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Wholesale</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Platform</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Partner Program</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Reseller Program</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #009B3A"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Monetization															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Pricing & Credits</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Value of Resources</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Revenue</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">API Value</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Daily Limit</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Usage</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Incentive</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Purchase</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Buyout</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Discounts</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Volume</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Applying</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #009B3A"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Monetization															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Indirect Value Generation</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Marketing Vehicle</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Web or Mobile Traffic</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Brand Awareness</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Data & Content Acquisition</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #009B3A"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Monetization															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Partner Revenue Generation</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Link Affiliate</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Revenue Share</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Credits to Bill</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #009B3A"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Monetization															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Internal Revenue Generation</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Monthly</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Users</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Applications</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Tiers</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Affiliate Revenue</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Advertising Revenue</li>
	        																							</ul>
													</section>
												              			<section>
											<table style="margin-left: 475px; margin-top: 100px;" cellspacing="5">
												<tr>
													<td style="vertical-align: middle; padding: 25px;">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-plan.png" width="150" style="padding: 15px;" />
													</td>
													<td style="font-size: 75px; font-weight: bold; vertical-align: middle;">
															Plans													</td>
												</tr>
												<tr>
													<td colspan="2">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
														<div style="width: 100%; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #EE0034">
														<div>
													</td>
												</tr>
											</table>
										</section>
              			                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #EE0034"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Plans															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Plan Details</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Trial Period</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Setup Cost</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Subscription Time</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Subscription Cost</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Plan Type</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Features</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Country</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #EE0034"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Plans															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Metrics</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Default</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Volume</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Price Per</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #EE0034"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Plans															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Limits</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Range</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Timeframe</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #EE0034"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Plans															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> API Resources</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Methods</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Verbs</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #EE0034"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Plans															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Rate Limits</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Rate Limits Page</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Rate Limit Information Inline In Docs</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Account Rate Limit API</li>
	        																							</ul>
													</section>
												              			<section>
											<table style="margin-left: 475px; margin-top: 100px;" cellspacing="5">
												<tr>
													<td style="vertical-align: middle; padding: 25px;">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-partner.png" width="150" style="padding: 15px;" />
													</td>
													<td style="font-size: 75px; font-weight: bold; vertical-align: middle;">
															Partners													</td>
												</tr>
												<tr>
													<td colspan="2">
														<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
														<div style="width: 100%; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #8E258D">
														<div>
													</td>
												</tr>
											</table>
										</section>
              			                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #8E258D"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Partners															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Program Details</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Landing Page</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Program Details </li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Program Requirements</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Program Levels</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #8E258D"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Partners															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Partner Showcase</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">List of Partners</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Partner Stories</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Partner Search</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #8E258D"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Partners															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Partner Program</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Application</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Private Portal</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Certification</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #8E258D"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Partners															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> API</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Quota Increase</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Additional APIs</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Read / Write APIs</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #8E258D"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Partners															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Early Access</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Early Communication</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Early Opportunities</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Beta Access</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #8E258D"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Partners															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Legal</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Agreement</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Privacy Policy</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Code of Conduct</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #8E258D"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Partners															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Marketing Activities</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Blog Posts</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Press Release</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Facebook Post</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Twitter Post</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Google Plus</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #8E258D"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Partners															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Support</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Discounts</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Office Hours</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Training</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Advisors</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #8E258D"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Partners															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Content</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Quotes</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Testimonials</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Use of Logo</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #8E258D"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Partners															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Communication</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Blog</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Spotlight</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Newsletter</li>
	        																							</ul>
													</section>
												                        <section id="fragments">
													<table style="margin-left: 450px;" cellspacing="5" border="1">
														<tr style="border: 1px solid #000;">
															<td style="vertical-align: middle;" width="100">
																<img src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-round-black-circle.png" width="125" align="left" />
																<div style="width: 150px; height: 50px; margin-top: 40px; margin-left: 25px; background-color: #8E258D"></div>
															</td>
															<td style="font-size: 75px; font-weight: bold; padding-top: 5px; margin:0px; vertical-align: middle;" valign="top" align="left">
																	Partners															</td>
														</tr>
														<tr>
															<td style="font-size: 50px; font-weight: bold; text-align: center;" align="center" colspan="2"> >> Financial</td>
														</tr>
													</table>
													<br />
													<ul style="font-size: 24px; list-style: circle; margin-left: 600px;">
	        									                          <li style="font-size: 24px; text-align: left; padding: 2px;">Revenue Sharing</li>
	        										                          <li style="font-size: 24px; text-align: left; padding: 2px;">Reseller Discounts</li>
	        																							</ul>
													</section>
                          <!-- End Generated--->

                          <!-- Begin Layers 1-->
                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map1.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-2.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-3.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-4.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-5.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-6.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-7.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-8.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-9.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-10.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-11.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-12.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-13.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-14.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-15.png" width="1000" /></p>
      		                </section>

                          <!--Begin Layer 2 -->
                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-resources-1.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-resources-2.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-resources-3.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-resources-4.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-resources-5.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-resources-6.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-resources-7.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-resources-8.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-resources-9.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-resources-10.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-resources-11.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-resources-12.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-resources-13.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-resources-14.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-resources-15.png" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/london_underground2-interactive.gif" width="1000" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/1889small.jpg" width="650" /></p>
                            <p><strong>1889</strong>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/1902small.jpg" width="800" /></p>
                            <p><strong>1902</strong>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/1905small.jpg" width="680" /></p>
                            <p><strong>1905</strong>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/1908small.jpg" width="650" /></p>
                            <p><strong>1908</strong>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/1910small.jpg" width="650" /></p>
                            <p><strong>1910</strong>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/1911small.jpg" width="650" /></p>
                            <p><strong>1911</strong>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/1913small.jpg" width="650" /></p>
                            <p><strong>1913</strong>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/1914small.jpg" width="650" /></p>
                            <p><strong>1914</strong>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/1919small.jpg" width="650" /></p>
                            <p><strong>1919</strong>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/1920small.jpg" width="650" /></p>
                            <p><strong>1920</strong>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/1921small.jpg" width="650" /></p>
                            <p><strong>1921</strong>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/1924small.jpg" width="650" /></p>
                            <p><strong>1924</strong>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/1926small.jpg" width="600" /></p>
                            <p><strong>1926</strong>
      		                </section>

                          <section>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/1932small.jpg" width="650" /></p>
                            <p><strong>1932</strong>
      		                </section>

                          <section>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/Beck_Map_1933.jpg" width="800" /></p>
                            <p><strong>1933</strong>
      		                </section>

                          <section>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/tubemap.gif" width="950" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/ian-bogost-twitter.png" width="600" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-key.png" width="660" /></p>
      		                </section>

                          <section>
                            <p><br /></p>
                            <p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-key-resources.png" width="600" /></p>
      		                </section>

                          <section>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-barcelona.png" width="800" /></p>
                            <p><strong>Barcelona</strong></p>
      		                </section>

                          <section>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-bejeing.gif" width="775" /></p>
                            <p><strong>Beijing</strong></p>
      		                </section>

                          <section>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-boston.jpg" width="775" /></p>
                            <p><strong>Boston</strong></p>
      		                </section>

                          <section>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-chicago.png" width="425" /></p>
                            <p><strong>Chicago</strong></p>
      		                </section>

                          <section>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-dc.png" width="550" /></p>
                            <p><strong>Washington DC</strong></p>
      		                </section>

                          <section>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-paris.jpg" width="800" /></p>
                            <p><strong>Paris</strong></p>
      		                </section>

                          <section>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-sao-paulo.gif" width="575" /></p>
                            <p><strong>Sao Paulo</strong></p>
      		                </section>

                          <section>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-seoul.jpg" width="850" /></p>
                            <p><strong>Seoul</strong></p>
      		                </section>

                          <section>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/talks/november-2015/subway-map-tokyo.gif" width="1000" /></p>
                            <p><strong>Tokyo</strong></p>
      		                </section>

                          <section>
      		            			<p><br /></p>
      		            			<p><img src="https://s3.amazonaws.com/kinlane-productions/api-evangelist/t-shirts/KL_InApiWeTrust-1000.png" width="400" /></p>
      		                	</section>                           

                          <section>
                              <h1>The End</h1>
                              <br />
                              <h4>By Kin Lane (@kinlane)</h4>
                              <br />
                              <p align="center"><img src="http://kinlane-productions.s3.amazonaws.com/api-evangelist/api-evangelist-logo-400.png" width="300" /></p>
                          </section>

                </div>

                <!-- The navigational controls UI -->
                <aside class="controls">
                    <a class="left" href="#">&#x25C4;</a>
                    <a class="right" href="#">&#x25BA;</a>
                    <a class="up" href="#">&#x25B2;</a>
                    <a class="down" href="#">&#x25BC;</a>
                </aside>

                <!-- Presentation progress bar -->
                <div class="progress"><span></span></div>

            </div>

            <script src="http://kinlane.github.com/talks/lib/js/head.min.js"></script>
            <script src="http://kinlane.github.com/talks/javascripts/reveal.min.js"></script>
            <script>

                // Full list of configuration options available here:
                // https://github.com/hakimel/reveal.js#configuration
                Reveal.initialize({
                    controls: true,
                    progress: true,
                    history: true,

                    theme: Reveal.getQueryHash().theme || 'default', // available themes are in /css/theme
                    transition: Reveal.getQueryHash().transition || 'default', // default/cube/page/concave/linear(2d)

                    // Optional libraries used to extend on reveal.js
                    dependencies: []
                });

            </script>

    </body>
</html>
