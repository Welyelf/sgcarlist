<?php $this->load->view('layout/head'); ?>
<?php $this->load->view('layout/header'); ?>
    <style>
        .adjust2{
            width: 100%;
            margin-bottom: 0;
            height: 300px;
        }
        .placeholder{
            width: 300px;
            height: 300px;
        }
        .image-row{
            padding-bottom: 20px;
        }
        .required{
            color: #CC0000;
            font-size: 18px;
        }


        #msform fieldset:not(:first-of-type) {
            display: none;
        }

        select.list-dt {
            border: none;
            outline: 0;
            border-bottom: 1px solid #ccc;
            padding: 2px 5px 3px 5px;
            margin: 2px
        }

        select.list-dt:focus {
            border-bottom: 2px solid skyblue
        }


        .fs-title {
            font-size: 25px;
            color: #2C3E50;
            margin-bottom: 10px;
            font-weight: bold;
            text-align: left
        }

        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey
        }

        #progressbar .active {
            color: #000000
        }

        #progressbar li {
            list-style-type: none;
            font-size: 12px;
            width: 33%;
            float: left;
            position: relative
        }

        #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f007"
        }

        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f009"
        }

        #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f09d"
        }


        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 18px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px
        }

        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: skyblue
        }

        .radio-group {
            position: relative;
            margin-bottom: 25px
        }

        .radio {
            display: inline-block;
            width: 204px;
            height: 104px;
            border-radius: 0;
            background: lightblue;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            box-sizing: border-box;
            cursor: pointer;
            margin: 8px 2px
        }

        .radio:hover {
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
        }

        .radio.selected {
            box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
        }

    </style>

    <div class="container-fluid">
        <div style="position: relative;">
            <div style="position: inherit;" class="row content">
                <div id="carousel-example-generic" class="carousel" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" >
                        <div class="item active">
                            <div class="row" >
                                <div class="col-xs-12">
                                    <div class="thumbnail adjust1" style="opacity: 0.7;background: rgba(0, 0, 0, 0) url('<?=base_url()?>assets/images/banner_private_seller.jpg') no-repeat scroll center center / cover;height: 150px;">
                                        <div class="hero__overlay"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div style="position: relative;">
            <div class="container" >
                <div class="row justify-content-center mt-0">
                    <div class="col-md-12  p-0 mt-3 mb-2">
                        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                            <br><br>
                            <h2 class="text-center"><strong>Terms Of Use</strong></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h4>1 Acceptance Of Terms</h4>
                    <p>
                        Your use of our Services is subject to these Terms. By using
                        the Services, you are deemed to have accepted and agree to
                        be bound by these Terms. We may make changes to these
                        Terms from time to time. We may notify you of such changes
                        by any reasonable means, including by posting the revised
                        version of these Terms on this website. Your use of the
                        Services following changes to these Terms will constitute your
                        acceptance of those changes.
                    </p>
                    <h4>2 Ability To Accept Terms </h4>
                    <p>
                        You affirm that you are either more than 18 years of age,
                        or possess legal parental or guardian consent, and are fully
                        able and competent to enter into the terms, conditions,
                        obligations, affirmations, representations, and warranties set
                        forth in these Terms, and to abide by and comply with these
                        Terms.
                    </p>
                    <h4>3 Access Services</h4>
                    <p>
                        You are responsible for all access to our Services using your
                        internet connection, even if the access is by another person.
                        We will use reasonable efforts to ensure that the Services is
                        available at all times. However, we cannot guarantee that the
                        Services or any individual function or feature of the Services
                        will always be available and/or error free. Our Services may be
                        unavailable during periods when we are implementing
                        upgrades or carrying our essential maintenance.
                    </p>
                    <h4>4 Use Conduct </h4>
                    <p>
                        4.1 As a condition of your use of this Web Site, you warrant
                        and undertake to carlist.sg that you will not use this Web Site
                        for any purpose that is illegal under any relevant laws or
                        prohibited by the Terms of Service.<br>
                        4.2 You also acknowledge and agree that any decision of
                        carlist.sg under the Terms of Service shall be final, conclusive
                        and binding upon you.<br>
                        4.3 By way of example, and not as a limitation, you agree that
                        when using this Web Site and its associated Services, you
                        warrant and undertake that you will not:<br>
                        • a. Defame, abuse, harass, stalk, threaten or otherwise
                        violate the legal rights (such as rights of privacy and
                        publicity) of others.<br>
                        • b. Post, distribute or disseminate any untrue,
                        inappropriate, hateful, profane, defamatory, racially,
                        religiously, ethnically or sexually objectionable, infringing,
                        obscene, indecent or unlawful topic, name, material or
                        information.<br>
                        • c. Impersonate any person or entity, including, but not
                        limited to, a carlist.sg official, forum moderator or other
                        Website end user, or falsely state or otherwise
                        misrepresent your affiliation with a person or entity.<br>
                        • d. Post by way of hyperlinking or otherwise any materials
                        (including without limitation, software, text, photographs
                        and diagrams) that is protected by intellectual property
                        laws (or by rights of privacy or publicity) unless you own or
                        control the rights thereto or have received all necessary
                        consents.<br>
                        • e. Post a link, upload or distribute any files that contain
                        viruses, corrupted files, or any other similar software or
                        programs that may damage or degrade or otherwise
                        prejudice the operation and performance of another's
                        computer.<br>
                        • f. Post or otherwise transmit any content that infringes any
                        patent, trademark, trade secret, copyright or other
                        proprietary rights of any party.<br>
                        • g. Post or otherwise transmit any content that you do not
                        have a right to transmit under any law or under
                        contractual or fiduciary relationships (such as inside
                        information, proprietary and confidential information
                        learned or disclosed as part of employment relationships
                        or under non-disclosure agreements)<br>
                        • h. Advertise or offer to sell any goods or services on a
                        commercial basis in the Forums.<br>
                        • i. Unless otherwise authorized by carlist.sg, vehicle and
                        vehicle related industry manufacturers, distributors,
                        retailers, merchants, and the respective employees of such
                        establishments are prohibited from advertising or offering
                        to sell any goods or services, on behalf or in the interest of
                        that establishment, in the Classifieds, Forums or any enduser Services/Facilities.<br>
                        • j. Conduct or forward through the Web Site surveys,
                        contests, pyramid schemes or chain letters and
                        post/transmit any junk mail, spam or any unsolicited mass
                        dissemination of email.<br>
                        • k. Falsify or delete any author attributions, legal or other
                        proper notices or proprietary designations or labels of the
                        origin or source of software or other material contained in
                        a file that is uploaded.<br>
                        • l. Restrict or inhibit any other user from using and enjoying
                        the Web Site and/or Services.<br>
                        • Promote or provide instructional information about illegal
                        activities, promote physical harm or injury against any
                        group or individual, or promote any act of cruelty to
                        animals. This may include, but is not limited to, providing
                        instructions on how to assemble bombs, grenades and
                        other weapons, and creating "Crush" sites.<br>
                        • n. Collect or store personal data about other users.<br>
                        • o. Violate the Forum Etiquette and Rules which is hereby
                        incorporated by reference.<br>
                        • p. Use any robot, spider, other automatic device, or
                        manual process to monitor or copy any pages within the
                        Web Site or the contents without carlist.sg s prior written
                        permission.<br>
                        • q. Use any device, software or routine to interfere or
                        attempt to interfere with the proper working of the Web
                        Site.<br>
                        • r. Take any action that imposes an unreasonable or
                        disproportionately large load on carlist.sg servers.<br>
                    </p>

                    <h4>5 Access Services Outside of Singapore </h4>
                    <p>
                        We make no promise that the materials on our Services are
                        appropriate or available for use in locations outside
                        Singapore. Accessing the Services from territories where its
                        contents are illegal or unlawful is prohibited. If you choose to
                        access our Services from elsewhere, you do so on your own
                        initiative and are responsible for compliance with local laws.
                    </p>
                    <h4>6. 3rd Party Website </h4>
                    <p>
                        Our Services may provide links to other websites and online
                        resources. We are not responsible for and do not endorse
                        such external sites or resources. Your use of third-party
                        websites and resources is at your own risk.
                        You may create a link to our Services, provided that: the link is
                        fair and legal and is not presented in a way that is:
                        (a) Misleading or could suggest any type of association,
                        approval or endorsement by us that does not exist, or
                        (b) Harmful to our reputation or the reputation of any of our
                        affiliates;
                        You retain the legal right and technical ability to immediately
                        remove the link at any time, following a request by us to do
                        so.
                        We reserve the right to require you to immediately remove
                        any link to our Services at any time and you shall immediately
                        comply with any request by us to remove any such link.
                    </p>
                    <h4>6 Intellectual Property </h4>
                    <p>
                        The intellectual property rights in our Services and all of the
                        text, pictures, videos, graphics, user interfaces, visual
                        interfaces, trademarks, logos, applications, programs,
                        computer code and other content made available on it are
                        owned by us and our licensors. You may not print or
                        otherwise make copies of any such content without our
                        express prior permission.
                    </p>
                    <h4>7 Censorship </h4>
                    <p>
                        Carlist.sg has no obligation to monitor the communities.
                        However, carlist.sg reserves the right at all times to disclose
                        any information as necessary to satisfy any applicable law,
                        regulation, legal process or governmental request, or to edit,
                        refuse to post or to remove any information or materials, in
                        whole or in part, in ONESHIFT's sole discretion.
                        Carlist.sg does not control the content posted via the Services
                        and, as such, does not guarantee the accuracy, integrity or
                        quality of such content. You understand that by accessing the
                        Web Site and/or using the Services, you may be exposed to
                        content that is offensive, indecent or objectionable.
                        Carlist.sg does not control or endorse the content, messages
                        or information found in any community and, therefore,
                        carlist.sg specifically disclaims any liability with regard to the
                        communities and any actions resulting from your participation
                        in any community. Forum moderators are not authorised
                        carlist.sg spokespersons, and their views do not necessarily
                        reflect those of carlist.sg
                    </p>
                    <h4>8 Collection of Personal Information </h4>
                    <p>
                        We may collect and use information about you in accordance
                        with our privacy policy. You can view a copy of this policy by
                        clicking here <a href="https://sgcarlist.com" target="_blank">https://sgcarlist.com</a>
                    </p>
                    <h4>9 Governing Law</h4>
                    <p>Carlist.sg reserves the right to change the terms, conditions,
                        and notices under which our web site is offered with prior
                        notice to all </p>
                </div>
            </div>
        </div>
    </div>
    <h4> </h4>
    <div class="container-fluid">
        <?php $this->load->view('layout/footer'); ?>
    </div>
<?php $this->load->view('layout/script'); ?>