@extends('layouts.master')

@section('title')
FAQ
@stop

@section('content')
<ul class="example-orbit" data-orbit data-options="animation:slide;
                  pause_on_hover: false;
                  animation_speed: 500;
                  timer_speed: 3000;
                  navigation_arrows:true;
                  bullets:true;">
    <li>
        <img class="BIg" src="img/lightbox/Turtles.gif" alt="Turtles" />
        <div class="orbit-caption">
            The Turtles
        </div>
    </li>
    <li class="active">
        <img class="BIg" src="img/lightbox/rhino-True.gif" alt="rhino" />
        <div class="orbit-caption">
            The Rhino
        </div>
    </li>
    <li>
        <img class="BIg" src="img/lightbox/Pig.gif" alt="pig" />
        <div class="orbit-caption">
            The Pig
        </div>
    </li>
    <li>
        <img class="BIg" src="img/lightbox/Caterpillar-True.gif" alt="caterpillar" />
        <div class="orbit-caption">
            The Caterpillar
        </div>
    </li>
</ul>
<h2>Terms &amp; Conditions</h2>
<div class="columns panel">
    <h3>Terms</h3>
    <p>Bugz &amp; Beastiez offers this Web site, including all information, software, products and services available from this Web site or offered as part of or in conjunction with this Web site, to you, the user, conditioned upon your acceptance of all of the terms, conditions, policies and notices stated here. Generic Website reserves the right to make changes to these Terms and Conditions immediately by posting the changed Terms and Conditions in this location.</p>

       <p> Your continued use of the Web site constitutes your agreement to all such terms, conditions and notices, and any changes to the Terms and Conditions made by Bugz &amp; Beastiez.</p>

        <p>The term 'Bugz &amp; Beastiez' or 'us' or 'we' refers to the owner of the website. The term 'you' refers to the user or viewer of our website.</p>

        <P>The use of this website is subject to the following terms of use:</P>

       <P>Use the website at your own risk. This website is provided to you "as is," without warranty of any kind either express or implied. Neither Bugz &amp; Beastiez nor its employees, agents, third-party information providers, merchants, licensors or the like warrant that the Web site or its operation will be accurate, reliable, uninterrupted or error-free. No agent or representative has the authority to create any warranty regarding the Web site on behalf of Bugz &amp; Beastiez. Bugz &amp; Beastiez reserves the right to change or discontinue at any time any aspect or feature of the Web site.</p>
    <h4>Indemnification</h4>

    <p>Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.</p>

    <P>This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.</P>

   <P>All trade marks reproduced in this website which are not the property of, or licensed to, the operator are acknowledged on the website.</P>

   <P> Unauthorized use of this website may give rise to a claim for damages and/or be a criminal offense.</P>

    <P>From time to time this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).</P>

    <h3>Copyright</h3>

    <P>Except for material in the public domain under the United Kingdom copyright law, all material contained on the Web site (including all software, HTML code, Java applets, Active X controls and other code) is protected by UK and foreign copyright laws. Except as otherwise expressly provided in these terms and conditions, you may not copy, distribute, transmit, display, perform, reproduce, publish, license, modify, rewrite, create derivative works from, transfer, or sell any material contained on the Web site without the prior consent of the copyright owner.</P>

   <P> None of the material contained on Generic Website may be reverse-engineered, disassembled, decompiled, transcribed, stored in a retrieval system, translated into any language or computer language, retransmitted in any form or by any means (electronic, mechanical, photo reproduction, recordation or otherwise), resold or redistributed without the prior written consent of Generic Website. Violation of this provision may result in severe civil and criminal penalties.</P>

</div>

@stop

@section('footer')
<div class="small-12 columns panel">
    @parent
</div>
@stop
