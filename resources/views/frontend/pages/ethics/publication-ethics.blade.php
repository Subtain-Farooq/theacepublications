@extends('frontend.layouts.app')

@section('content')
    <div class="bg-white">
        <div class="container mx-auto px-4 my-12">

            <div class="flex justify-center">
                <h1 class="text-2xl text-white  bg-blue-800 px-8 text-center inline-block mb-5">Publication Ethics</h1>
            </div>

            <h2 class="text-blue-700 text-xl">Most Comprehensive publishing ethics guidelines: </h2>
            <p class="pb-3 text-justify">
                ACE Publication believe that ethical publishing leads to a better scientific community, where everyone is valued and everyone is responsible for the work they do. ACE Publications aims to ensure that best practice and enthical standars are maintained by journal (s) editor (s), authors (s) and reviewers. ACE Publication editors and reviewers are required to assess manuscripts fairly and maintain confidentiality. Authors must ensure that research submitted to ACE Publications is their own original work and is not under consideration or accepted for publication elsewhere.
            </p>

            <h2 class="text-blue-700 text-xl">Most Important points of Publication Ethics</h2>
            <div class="pb-3 text-justify">
                <?php
                $array = [
                    'Declare to your chosen journal that your manuscript is not published elsewhere',
                    'Declare any conflicts of interest',
                    'Check all co-authors meet criteria for authorship and ensure appropriate acknowledgements made in the manuscript',
                    'Include appropriate funding statements in the manuscript',
                    'Show informed consent and provide assurances that participants rights are protected',
                    'Explain how research using animals in conducted responsibly',
                    'Be alert to bias and follow fuidelines for accurate and complete reporting of research',
                    'Inform the journal if you subsequently find errors in your research',
                    'Sign a copyright letter of publication to authorise ACE Publication ',
                ];
                ?>

                <ul class="list-disc my-5 ml-10">
                    @foreach($array as $data)
                        <li class="my-2 text-justify pl-3">{{ $data }}</li>
                    @endforeach
                </ul>
            </div>

            <h2 class="text-blue-700 text-xl">Plagiarism:</h2>
            <p class="pb-3 text-justify">
                Manuscript submissions are check with anti-plagiarism software for exact of near-exact matches in the public domain to satisfy the editor that the submitted manuscript has not been plagiarised. However, when authors submit their manuscripts has not been plagiarised. However, when authors submit their manuscripts for consideration in the journal, they declare that their work is not plagiarised. While the editor makes reasonable efforts to determine the academic integrity of papers published in the journal, ultimate responsibility for the originality of submitted manuscripts thus lies with the author.
            </p>
            <p class="pb-3 text-justify">
                Plagiarism takes place when one authors deliberately uses another’s work without permission, credit, or acknowledgement. Authors must always remember that crediting the work of others (including your advisor’s or your own previous work) is paramount. Authors should always place their work in the context of the advancement of the field and acknowledge the findings of other on which you have built your research
                About the publishing ethics guidelines if you need more in-depth or specific information on ethics, the publishing ethics guidelines has everything you need
            </p>

            <h2 class="text-blue-700 text-xl">Publication Ethics for Journal Authors:</h2>
            <p class="pb-3 text-justify">
                Authors should declare that all work in their submitted piece is original and cited content from other sources appropriately to avoid plagiarism
                Authors must ensure their contribution does not contain any libellous matter or infringe any copyright or other intellectual property rights or any other rights of any third party
                The listening of authors should accurately reflect who carried out the research and wrote the article and the order authorship should be jointly determined by all of the co-authors.
                All authors should be aware of the submission of their paper to the journal and agree to the main authors signing an IPR form on their behalf.
            </p>
            <p class="pb-3 text-justify">
                Authors should ensure that their manuscript as submitted is not under consideration (or accepted for publication) elsewhere. Where sections of the manuscript overlap with published or submitted content, their should be acknowledged and cited Authors should obtain permission to reproduce any content from third party sources (text and images), Unfortunately, the press is unable to publish third party content for which permission has not been obtained (excluding content covered by fair dealing).
            </p>
            <p class="pb-3 text-justify">
                The source of funding for a research project should be listed on all funded research papers. Other sources of support including funding of open access article processing charges should also be clearly identified in the manuscript, typically in an acknowledgement
                Authors should declare any potential conflicts of interest relating to a specific article
                Authors should inform the editor or publisher if there is a significant error in their published piece and work with the editor to publish an erratum addendum or retraction where necessary. Authors have the right to appear editorial decisions

            </p>

            <h2 class="text-blue-700 text-xl">Publication Ethics for Journal Article Reviewers:</h2>
            <p class="pb-3 text-justify">
                Reviewers should assist in improving the quality of a submitted article by reviewing the manuscript with care, consideration and objectivity, in a timely manner. Reviewers should inform the journal editor of any published or submitted content that is similar to the materials under review, or any suspected plagiarism.
                Reviewers should declare any potential conflicts of interest relating to a specific article or author. Reviewers should respect the confidentiality of any information or material supplied during the review process
            </p>

        </div>
    </div>
@endsection
