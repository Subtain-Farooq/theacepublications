@extends('frontend.layouts.app')

@section('content')
    <div class="bg-white">
        <div class="container mx-auto px-4 my-12">

            <div class="flex justify-center">
                <h1 class="text-2xl text-white  bg-blue-800 px-8 text-center inline-block mb-5">Corrections and Retractions</h1>
            </div>

            <h2 class="text-blue-700 text-xl">If a correction is needed, we will follow these minimum standards:</h2>
            <div class="pb-3 text-justify">
               <?php
                $array = [
                    'The journal should publish a correction notice as soon as possible detailing changes from and citing the original publication; the correction should be on an electronic page that is included in an electronic Table of Contents to ensure proper indexing.',
                    'The journal should also post a new article version with details of the changes from the original version and the date(s) on which the changes were made.',
                    'The journal should archive all prior versions of the article. This archive can be either directly accessible to readers or can be made available to the reader on request.',
                    'Previous electronic versions should prominently note that there are more recent versions of the article.',
                    'The citation should be to the most recent version.',
                ];
               ?>

                <ul class="list-disc my-3 ml-10">
                    @foreach($array  as $data)
                        <li class="my-2 text-justify pl-3">{{ $data }}</li>
                    @endforeach
                </ul>

            </div>

            <p class="pb-3 text-justify">
                Errors serious enough to invalidate a paper's result and conclusions may require retraction. Scientific misconduct includes, but is not necessarily limited to data fabrication; data falsification including deceptive manipulation of images; and plagiarism. The integrity of research may also be compromised by an inappropriate methodology that could lead to retraction.
            </p>
            <p class="pb-3 text-justify">
                Each situation requires individual assessment. When scientific misconduct is alleged, or concerns are otherwise raised about the conduct or integrity of work described in submitted or published papers, the editor should initiate appropriate procedures detailed by such committees such as the Committee on Publication Ethics (COPE) (<span class="text-blue-500">publicationethics.org/resources/flowcharts</span>) and may choose to publish an expression of concern pending the outcomes of those procedures. If the procedures involve an investigation at the authors' institution, the editor should seek to discover the outcome of that investigation, notify readers of the outcome if appropriate, and if the investigation proves scientific misconduct, publish a retraction of the article. There may be circumstances in which no misconduct is proven, but an exchange of letters to the editor could be published to highlight matters of debate to readers.
            </p>
            <p class="pb-3 text-justify">
                Expressions of concern and retractions should not simply be a letter to the editor. Rather, they should be prominently labelled, appear on an electronic page that is included in an electronic or a print Table of Contents to ensure proper indexing, and include in their heading the title of the original article. Online, the retraction and original article should be linked in both directions and the retracted article should be clearly labelled as retracted in all its forms (Abstract, full text, PDF). Ideally, the authors of the retraction should be the same as those of the article, but if they are unwilling or unable, the editor may under certain circumstances accept retractions by other responsible persons, or the editor may be the sole author of the retraction or expression of concern. The text of the retraction should explain why the article is being retracted and include a complete citation reference to that article. Retracted articles should remain in the public domain and be clearly labelled as retracted.
            </p>
            <p class="pb-3 text-justify">
                The validity of previous work by the author of a fraudulent paper cannot be assumed. Editors may ask the author's institution to assure them of the validity of other work published in their journals, or they may retract it. If this is not done, editors may choose to publish an announcement expressing concern that the validity of previously published work is uncertain.
            </p>
        </div>
    </div>
@endsection
