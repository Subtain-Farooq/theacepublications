@extends('frontend.layouts.app')

@section('content')
    <div class="bg-white">
        <div class="container mx-auto px-4 my-12">

            <div class="flex justify-center">
                <h1 class="text-2xl text-white  bg-blue-800 px-8 text-center inline-block mb-5">Copyright and Licensing</h1>
            </div>

            <p class="pb-3 text-justify">
                For all articles published in ACE Publications, copyright is retained by the authors. Articles are licensed under an open access Creative Commons CC BY 4.0 license, meaning that anyone may download and read the paper for free. In addition, the article may be reused and quoted provided that the original published version is cited. These conditions allow for maximum use and exposure of the work, while ensuring that the authors receive proper credit.
            </p>
            <p class="pb-3 text-justify">
                In exceptional circumstances articles may be licensed differently. If you have a specific condition (such as one linked to funding) that does not allow this license, please mention this to the editorial office of the journal at submission. Exceptions will be granted at the discretion of the publisher.
            </p>

            <h2 class="text-blue-700 text-xl">Reproducing Published Material from other Publishers</h2>
            <p class="pb-3 text-justify">
                It is absolutely essential that authors obtain permission to reproduce any published material (figures, schemes, tables or any extract of a text) which does not fall into the public domain, or for which they do not hold the copyright. Permission should be requested by the authors from the copyright holder (usually the Publisher, please refer to the imprint of the individual publications to identify the copyright holder).
            </p>





            <h2 class="text-blue-700 text-xl">Permission is required for:</h2>
            <div class="pb-3 text-justify">
                <?php
                    $array = [
                        'Your own works published by other Publishers and for which you did not retain copyright.',
                        'Substantial extracts from anyone\'s works or a series of works.',
                        'Use of Tables, Graphs, Charts, Schemes and Artworks if they are unaltered or slightly modified.',
                        'Photographs for which you do not hold copyright.',

                    ];
                ?>
                <ul class="list-disc my-3 ml-10">
                    @foreach($array as $data)
                        <li class="my-2 text-justify pl-3">{{ $data }}</li>
                    @endforeach
                </ul>
            </div>

            <h2 class="text-blue-700 text-xl">Permission is not required for:</h2>
            <div class="pb-3 text-justify">
                <?php
                $array = [
                    'Reconstruction of your own table with data already published elsewhere. Please notice that in this case you must cite the source of the data in the form of either "Data from..." or "Adapted from...".',
                    'Reasonably short quotes are considered fair use and therefore do not require permission.',
                    'Graphs, Charts, Schemes and Artworks that are completely redrawn by the authors and significantly changed beyond recognition do not require permission.',
                ];
                ?>
                <ul class="list-disc ml-10 my-3">
                    @foreach($array as $data)
                        <li class="my-2 text-justify pl-3">{{ $data }}</li>
                    @endforeach
                </ul>
            </div>

            <h2 class="text-blue-700 text-xl">Obtaining Permission</h2>
            <p class="pb-3 text-justify">
                In order to avoid unnecessary delays in the publication process, you should start obtaining permissions as early as possible. If in any doubt about the copyright, apply for permission. ACE Publications cannot publish material from other publications without permission.
            </p>
            <p class="pb-3 text-justify">
                The copyright holder may give you instructions on the form of acknowledgement to be followed; otherwise follow the style: "Reproduced with permission from [author], [book/journal title]; published by [publisher], [year].' at the end of the caption of the Table, Figure or Scheme.
            </p>


        </div>
    </div>
@endsection
