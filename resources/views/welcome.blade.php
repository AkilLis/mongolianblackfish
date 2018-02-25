@extends('layouts.index-layout', ['currentView' => 'index-page'])
@section('content') 
    <div id="scene" style="position: relative;">
        <lake-list>
        </lake-list>
        <river-list>
        </river-list>
        <div class="cover-text">
            <h1 class="cover-text-header">
                TAIMEN<br />ADVENTURE
            </h1>
        </div>
        <div data-depth="1.00" class="row cover-image" style="background-image:url('/images/cover.jpg')">
        </div>
        <trip-list>
        </trip-list>

        <div class="container" style="margin-bottom: 100px;">
            </br>
                <h3 class="white font-sub">ANGLERS</h3>

                <h4 class="white" style="line-height: 1.5em;">
                  A tour group consists of four people and we can arrange up to six people per request.
                </h4>

                <h3 class="white font-sub">TAILOR MADE</h3>

                <h4 class="white" style="line-height: 1.5em;">
                  You can choose your trip from the river basin on our web page and customize it using the tailor made section.
                </h4>

                <h3 class="white font-sub">DEPOSIT</h3>

                <h4 class="white" style="line-height: 1.5em;">
                  You need to book your trip placing 40 percent deposit. The deposit is refundable 60 days ahead the trip. Please keep in mind that we are not able to refund the deposit if you cancel the trip within 60 days. Upon your reservation, our manager will contact you to get and give the detailed information.
                </h4>

                <h3 class="white font-sub">TRAVEL COST INCLUDES FOLLOWING SERVICES</h3>

                <h4 class="white" style="line-height: 1.5em;">
                   2 days stay at five star hotel in UB, transport to and from the airport, local round flight, river basin lodge, fishing permission, guide, boat and horseback ride, meals and beverage, accidental insurance, and alcoholic beverages per your request.
                </h4>

                <h3 class="white font-sub">FISHING PERMITS</h3>

                <h4 class="white" style="line-height: 1.5em;">
                   Our organization holds a special permission of fishing as per the local law and cooperate with local Natural Conservation Department and Department of Specially Protected zone.
                </h4>
        </div>

        <div class="taimen-cover-image" style="background-image:url('/images/taimen.jpeg')">
            <div class="container" style="margin-left: auto; margin-right: auto;">
                <div class="col-md-4" style="padding-left: 80px; padding-top: 80px; ">
                    <h1 style="color: #fff !important; font-weight: bold; word-wrap: break-word; width: 160px;">
                        ABOUT TAIMEN
                    </h1>
                </div>
                <div class="col-md-8" style="padding-top: 40px; padding-right: 40px; ">
                    <div style="background: rgba(0, 0, 0, 0.6); border-radius: 5px; padding: 40px; ">
                        <h3 style="color: #fff;">Hucho taimen Pallas, 1773</h3>
<h3 style="color: #fff;">Taimen</h3>
<h3 style="color: #fff;">Salmoniformes- Salmonid</h3>
</br>
<h4 style="color: #FECA08; font-size: 18px;">Salmonidae- Salmons, Salmonid fishes</h4>

<p style="color: #fff; font-size: 18px;">
    <span style="color: #FECA08; font-size: 18px;">Status:</span> Rare. According to the IUCN Red List Categories and Criteria, the fish Is listed as Critically Endangered.
</br>
<span style="color: #FECA08; font-size: 18px;">Distribution and Range:</span> Obi, Yenisey and Kama River basin. In Mongolia: the mayor tributaries of the Selenge River. Lakes in the Darkhad Depression, Buir lake and The Shigshed, Khog, Delgermuren, Onon, Kherlen and khalkh Rivers.

</br>
<span style="color: #FECA08; font-size: 18px;">Habitat:</span> Not researched. But favorite habitat sites are: Cold water lakes and fast stream rivers in highland areas.

</br>
<span style="color: #FECA08; font-size: 18px;">Population and Threats:</span> Dwindling of population because of disturbance of its winter and spring home ranges as deep hollow water pollution due to gold mining and over fishing.

</br>
<span style="color: #FECA08; font-size: 18px;">Conservation Measures:</span> It was listed as a rare species since 1995. Included as a rare in Appendix of the Government resolution #7 from 2012 and in Mongolian Red Book. Some sections of the Onon and Kherlen Rivers are included within NSPAN. The experimental study is undertaken on its breeding. The conservation project “Taimen” is implementing jointly with international organizations.

</br>
<span style="color: #FECA08; font-size: 18px;">Further Actions:</span> Assess the distribution, population and develop protection measures, including seasonal protection of spawning sites; breeding it in adequate areas, including rivers in internal water basin; establish breeding stations; involve in conservation activities the local community groups, stop the illegal harvesting and promote public awareness on necessity of protection of the species.


                        </p>
                        <p style="color: #fff; font-size: 18px;">
                            Taimen are perhaps the world’s most incredible dry fly experience.  Every taimen you encounter – whether you miss it or land it – will create a lasting memory.

Taimen are the ultimate mega-trout. They are the largest member of the salmonid family. Mongolian taimen can live for nearly fifty years and reach sixty inches (1.5 meter) in length. Taimen caught on the fly generally measure between 30 – 40 inches (.75 – 1 meter).  Anything over 40 inches (1m) is considered trophy class.  We catch and very carefully release several fish every season that measure over 50 inches (1.25 cm).

Mongolian taimen do not run out to the ocean or even lakes.   These behemoths spend their entire life cycle in relatively small rivers.  Taimen will migrate great distances to access spawning, feeding, and winter habitats.  An adult taimen may use 60 miles (100km) of river each year, making conservation of vast stretches of water vitally important.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="padding-top: 80px; padding-bottom: 80px">
            <h1 class="text-center white">
                OUR PARTNERS
            </h1>

            <partner-list>
            </partner-list>
        </div>
    </div>
@stop