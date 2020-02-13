@extends('frontend.layouts.app')

@section('content')
    <div class="bg-white">
        <div class="container mx-auto px-4 my-12">

            <div class="flex justify-center">
                <h1 class="text-2xl text-white  bg-blue-800 px-8 text-center inline-block mb-5">Authorship</h1>
            </div>

            <p class="pb-3 text-justify">
                Authorship provides credit for a researcher's contributions to a study and carries accountability. Authors are expected to fulfil the criteria below
            </p>

            <p class="pb-3 text-justify">
                Author is expected to have made substantial contributions to the conception or design of the work; or the acquisition, analysis, or interpretation of data; or the creation of new software used in the work; or have drafted the work or substantively revised it and to have approved the submitted version (and any substantially modified version that involves the author's contribution to the study) and to have agreed both to be personally accountable for the author's own contributions and to ensure that questions related to the accuracy or integrity of any part of the work, even ones in which the author was not personally involved, are appropriately investigated, resolved, and the resolution documented in the literature.
            </p>
            <p class="pb-3 text-justify">
                Journal of ACE Publications do not require all authors of a research paper to sign the letter of submission, nor do they impose an order on the list of authors. Submission to a ACE Publications journal(s) is taken by the journal to mean that all the listed authors have agreed all of the contents, including the author list and author contribution statements. The corresponding author is responsible for having ensured that this agreement has been reached that all authors have agreed to be so listed, and have approved the manuscript submission to the journal, and for managing all communication between the journal and all co-authors, before and after publication. The corresponding author is also responsible for submitting a competing interests' statement on behalf of all authors of the paper.
            </p>
            <p class="pb-3 text-justify">
                It is expected that the corresponding author (and on multi-group collaborations, at least one member of each collaborating group, usually the most senior member of each submitting group or team, who accepts responsibility for the contributions to the manuscript from that team) will be responsible for the following with respect to data, code and materials ensuring that data, materials, and code comply with transparency and reproducibility standards of the field and journal;
            </p>

            <div class="pb-3 text-justify">
               <?php
                    $array = [
                        'ensuring that original data/materials/code upon which the submission is based are preserved following best practices in the field so that they are retrievable for reanalysis;',
                        'confirming that data/materials/code presentation accurately reflects the original;',
                        'foreseeing and minimizing obstacles to the sharing of data/materials/code described in the work',

                    ];
                ?>

                <ul class="list-inside list-disc">
                    @foreach($array  as $data)
                        <li class="ml-5">{{ $data }}</li>
                    @endforeach
                </ul>
            </div>
            <p class="pb-3 text-justify">
                At submission, the corresponding author must include written permission from the authors of the work concerned for mention of any unpublished material cited in the manuscript (for example others' data, in press manuscripts, personal communications or work in preparation). The corresponding author also must clearly identify at submission any material within the manuscript (such as figures) that has been published previously elsewhere and provide written permission from authors of the prior work and/or publishers, as appropriate, for the re-use of such material.
                After acceptance, the corresponding author is responsible for the accuracy of all content in the proof, including the names of co-authors, addresses and affiliations.

            </p>
            <p class="pb-3 text-justify">
                After publication, the corresponding author is the point of contact for queries about the published paper. It is their responsibility to inform all co-authors of any matters arising in relation to the published paper and to ensure such matters are dealt with promptly. Authors of published material have a responsibility to inform the journal immediately if they become aware of any aspects that requires correction.
            </p>


            <p class="pb-3 text-justify">
                Any changes to the author list after submission, such as a change in the order of the authors or the deletion or addition of authors, must be approved by every author. Journal of ACE Publications editors are not in a position to investigate or adjudicate authorship disputes before or after publication. Such disagreements, if they cannot be resolved amongst authors, should be directed to the relevant publisher authority.
            </p>
            <p class="pb-3 text-justify">
                The primary affiliation for each author should be the institution where the majority of their work was done. If an author has subsequently moved, the current address may also be stated. ACE Publications remains neutral with regard to jurisdictional claims in published maps and institutional affiliation
            </p>

            <h2 class="text-blue-700 text-xl">Editor-In-Chief Responsibilities</h2>
            <p class="pb-3 text-justify">
                ACE Publications encourage transparency by publishing author contribution statements. Authors are required to include a statement of responsibility in the manuscript, including review-type articles, that specifies the contribution of every author. The level of detail varies; some disciplines produce manuscripts that comprise discrete efforts readily articulated in detail, whereas other fields operate as group efforts at all stages. Author contribution statements are included in the published paper.
            </p>
            <p class="pb-3 text-justify">
                ACE Publications also allow one set of up to six co-authors to be specified as having contributed equally to the work or having jointly supervised the work. Other equal contributions are best described in author contribution statements.
            </p>

            <h2 class="text-blue-700 text-xl">Acknowledgement</h2>
            <p class="pb-3 text-justify">
                Contributors who do not meet the criteria for above authorship categories should be only mentioned in acknowledgements. Authors is expected to get consent from all those persons/organizations/funding agencies to be acknowledged with in the manuscript
            </p>

        </div>
    </div>
@endsection
