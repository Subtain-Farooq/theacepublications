@extends('frontend.layouts.app')

@section('content')

    <div class="bg-white">
        <div class="container mx-auto px-4 my-12">
            <div class="py-2">
                <h1 class="text-4xl text-white main-font font-bold bg-blue-800 px-8 text-left inline-block mb-4 capitalize">Publishing ethics guidelines</h1>
                <div class="">
                    <p class="text-justify">
                        ACE Publication believe that ethical publishing leads to a better scientific community, where everyone is valued and everyone is responsible for the work they do. ACE Publications aims to ensure that best practice and ethical standards are maintained by journal (s) editor (s), authors (s) and reviewers. ACE Publication editors and reviewers are required to assess manuscripts fairly and maintain confidentiality. Authors must ensure that research submitted to ACE Publications is their own original work and is not under consideration or accepted for publication elsewhere.
                    </p>
                </div>
            </div>

            <div class="py-2">
                <h1 class="text-3xl main-font font-bold text-blue-900 capitalize">Most Important points of Publication Ethics</h1>
                <div class="">
                    <?php $articles = [

                        'Declare to your chosen journal that your manuscript is not published elsewhere',
                        'Declare any conflicts of interest',
                        'Check all co-authors meet criteria for authorship and ensure appropriate acknowledgements made in the manuscript',
                        'Include appropriate funding statements in the manuscript',
                        'Show informed consent and provide assurances that participants rights are protected',
                        'Explain how research using animals in conducted responsibly',
                        'Be alert to bias and follow guidelines for accurate and complete reporting of research',
                        'Inform the journal if you subsequently find errors in your research',
                        'Sign a copyright letter of publication to authorise ACE Publication '


                    ] ?>
                    <ul class="list-disc list-inside my-5">

                        @foreach($articles as $article)
                            <li class="my-1">
                                {{ $article }}
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>

            <div class="py-2">
                <h1 class="text-3xl main-font font-bold text-blue-900">Plagiarism</h1>
                <div class="">
                    <p class="text-justify">
                        Manuscript submissions are check with anti-plagiarism software for exact of near-exact matches in the public domain to satisfy the editor that the submitted manuscript has not been plagiarised. However, when authors submit their manuscripts has not been plagiarised. However, when authors submit their manuscripts for consideration in the journal, they declare that their work is not plagiarised. While the editor makes reasonable efforts to determine the academic integrity of papers published in the journal, ultimate responsibility for the originality of submitted manuscripts thus lies with the author.
                    </p>
                    <p class="text-justify my-4">
                        Plagiarism takes place when one authors deliberately uses another’s work without permission, credit, or acknowledgement. Authors must always remember that crediting the work of others (including your advisor’s or your own previous work) is paramount. Authors should always place their work in the context of the advancement of the field and acknowledge the findings of other on which you have built your research
                    </p>
                    <p class="text-justify my-4">
                        About the publishing ethics guidelines if you need more in-depth or specific information on ethics, the publishing ethics guidelines has everything you need
                    </p>
                </div>
            </div>

            <div class="py-2">
                <h1 class="text-3xl main-font font-bold text-blue-900 capitalize">Publication Ethics for Journal Authors</h1>
                <div class="">
                    <p class="text-justify">
                        Authors should declare that all work in their submitted piece is original and cited content from other sources appropriately to avoid plagiarism
                        Authors must ensure their contribution does not contain any libellous matter or infringe any copyright or other intellectual property rights or any other rights of any third party
                        The listening of authors should accurately reflect who carried out the research and wrote the article and the order authorship should be jointly determined by all of the co-authors.
                        All authors should be aware of the submission of their paper to the journal and agree to the main authors signing an IPR form on their behalf.
                    </p>
                    <p class="text-justify my-4">
                        Authors should ensure that their manuscript as submitted is not under consideration (or accepted for publication) elsewhere. Where sections of the manuscript overlap with published or submitted content, there should be acknowledged and cited.
                        Authors should obtain permission to reproduce any content from third party sources (text and images), Unfortunately, the press is unable to publish third party content for which permission has not been obtained (excluding content covered by fair dealing).
                    </p>
                    <p class="text-justify my-4">
                        The source of funding for a research project should be listed on all funded research papers. Other sources of support including funding of open access article processing charges should also be clearly identified in the manuscript, typically in an acknowledgement
                        Authors should declare any potential conflicts of interest relating to a specific article.
                    </p>
                    <p class="text-justify my-4">
                        Authors should inform the editor or publisher if there is a significant error in their published piece and work with the editor to publish an erratum addendum or retraction where necessary. Authors have the right to appear editorial decisions.
                    </p>

                </div>
            </div>

            <div class="py-2">
                <h1 class="text-3xl main-font font-bold text-blue-900 capitalize">Publication Ethics for Journal Article Reviewers</h1>
                <div class="">
                    <p class="text-justify">
                        Reviewers should assist in improving the quality of a submitted article by reviewing the manuscript with care, consideration and objectivity, in a timely manner. Reviewers should inform the journal editor of any published or submitted content that is similar to the materials under review, or any suspected plagiarism.
                    </p>
                    <p class="text-justify my-4">
                        Reviewers should declare any potential conflicts of interest relating to a specific article or author. Reviewers should respect the confidentiality of any information or material supplied during the review process
                    </p>

                </div>
            </div>

        </div>
    </div>
@endsection
