@extends('frontend.layouts.app')

@section('content')
    <div class="bg-white">
        <div class="container mx-auto px-4 my-12">

            <div class="flex justify-center">
                <h1 class="text-2xl text-white  bg-blue-800 px-8 text-center inline-block mb-5">Guideline For Reviewers</h1>
            </div>

            <p class="pb-3 text-justify">
                <b>ACE Publications</b> sincerely grateful to scholars who give their time to peer-review the submitted articles. Rigorous peer-review is the corner-stone of high quality academic publishing.
            </p>

            <h2 class="text-blue-700 text-xl">Benefits</h2>
            <p class="pb-3 text-justify">
                Peer review is an essential part of the publication process, ensuring that journal(s) maintains high quality standards for its published papers. Reviewing is often an unseen and unrewarded task. We are striving to recognize the efforts of reviewers.
            </p>

            <h2 class="text-blue-700 text-xl">Some common benefits to be a peer-reviewer:</h2>
            <div class="pb-3 text-justify">
                <?php
                    $array = [

                        'Reviewing unpublished papers gives you a preview of the most recent research, so it helps you keep up with the rapidly expanding scholarship in your field of expertise.',
                        'The task of reading and offering critical comments provides valuable experience that can be applied to your own writing and that of your students and colleagues to encourage improvements.',
                        'Doing a thorough and penetrating job as a reviewer means lending a helping hand to a busy journal editor, and there is no doubt that it will be appreciated and remembered.',
                        'Offering constructive and supportive criticism helps authors very much like yourself with their efforts to improve their research, their writing and their chances of successfully sharing their work through publication. They may not know who you are, but most of them will be grateful for the assistance, even if it takes a while for them to feel that way.',
                        'By working to validate, question and improve the research published in your field you perform a valuable service for readers of the journal and your scholarly community as a whole',
                        'By evaluating and recommending for publication papers reporting valid and significant research you will be supporting and encouraging excellent research as well as promoting and inspiring the advancement of knowledge in your field.',
                        'Reviewing also enables you to catch and prevent instances of plagiarism, intellectual misconduct and unethical publication and research practices.',
                        'Your reviews will enable the editor to make the best publishing choices, keeping poor scholarship to a minimum and ensuring that important stages in the development of knowledge are published. The articles that result may even increase the number of readers and citations the journal earns.',
                        'Acting as a peer reviewer for a reputable scholarly journal is beneficial to your career and can make a significant difference when it comes to employment, promotions, research and funding opportunities, and even your own publication plans.',
                        'By taking an active part in your scholarly community through peer reviewing you make new connections and become part of a research network that is likely to prove valuable and pleasurable throughout your career.',
                        'If you do an excellent job when reviewing papers for a journal, you may be rewarded with a position on an editorial or advisory board or you may even become an associate or chief editor for the journal, where you will be able to contribute to knowledge in your field in new ways.',

                    ];
                ?>

                <ul class="list-disc ml-10">
                    @foreach($array as $data)
                        <li class="text-justify my-2 pl-3">{{ $data }}</li>
                    @endforeach
                </ul>


            </div>


            <h2 class="text-blue-700 text-xl">When reviewing for ACE Publications:</h2>
            <div class="pb-3 text-justify">
                <?php
                $array = [
                    'The reviewer will receive a personalized reviewer certificate.',
                    'Will be included in the journal’s annual acknowledgment of reviewers.',
                    'Will be considered for the journal’s outstanding reviewer award.',
                    'Finally, ACE Publicaitons will waive or reduce publication fees if authors are willing to review papers by other scholars, so reviewing just might save you a little money as well.',

                ];
                ?>

                <ul class="list-disc ml-10">
                    @foreach($array as $data)
                        <li class="text-justify my-2 pl-3">{{ $data }}</li>
                    @endforeach
                </ul>
            </div>


            <h2 class="text-blue-700 text-xl">Invitation To Join Volunteer Reviewer Database:</h2>
            <p class="pb-3 text-justify">
                If you are interested in reviewing articles for ACE Publications, please register your contact details, including your digital identifier, institutional affiliation, a short CV, and 5-6 keywords in line with your expertise.
            </p>
            <p class="pb-3 text-justify">
                The Managing Editor of the journal will send you a notification once approved.
            </p>

            <h2 class="text-blue-700 text-xl">Invitation to Review</h2>
            <p class="pb-3 text-justify">
                Manuscripts submitted to ACE Publications are reviewed by at least two experts. Reviewers are asked to evaluate the quality of the manuscript and to provide a recommendation to the external editor on whether a manuscript can be accepted, requires revisions or should be rejected.
            </p>


            <h2 class="text-blue-700 text-xl">We Ask Invited Reviewers To:</h2>
            <div class="pb-3 text-justify">
                <?php
                $array = [
                    'Accept or decline any invitations quickly, based on the manuscript title and abstract;',
                    'Suggest alternative reviewers if an invitation must be declined;',
                    'Request an extension in case more time is required to compose a report.',
                ];
                ?>

                <ul class="list-disc ml-10">
                    @foreach($array as $data)
                        <li class="text-justify my-2 pl-3">{{ $data }}</li>
                    @endforeach
                </ul>
            </div>


            <h2 class="text-blue-700 text-xl">As part of the assessment, reviewers will be asked to:</h2>
            <div class="pb-3 text-justify">
                <?php
                $array = [
                    'Rate the originality, significance, quality of the presentation, scientific soundness, interest to the readers, overall merit and English level of the manuscript;',
                    'Provide an overall recommendation for the publication of the manuscript;',
                    'Provide a detailed, constructive review report;',
                ];
                ?>

                <ul class="list-disc ml-10">
                    @foreach($array as $data)
                        <li class="text-justify my-2 pl-3">{{ $data }}</li>
                    @endforeach
                </ul>
            </div>

           <h2 class="text-blue-700 text-xl">Invitation to Review</h2>
            <p class="pb-3 text-justify">
                We ask reviewers to inform the journal editor if they hold a conflict of interests that may prejudice the review report, either in a positive or negative way. The editorial office will check as far as possible before the invitation, however we appreciate the cooperation of the reviewers in this matter. Reviewers who are invited to assess a manuscript they previously reviewed for another journal should not consider this as a conflict of interest in itself. In this case, reviewers should feel free to let us know if the manuscript has been improved or not compared to the previous version.
            </p>


            <h2 class="text-blue-700 text-xl">Invitation to Review</h2>
            <p class="pb-3 text-justify">
                Reviewers should keep the content of the manuscript, including the abstract, confidential. Reviewers must inform the Editorial Office if they would like a student or colleague to complete the review on their behalf.
            </p>
            <p class="pb-3 text-justify">
                ACE Publications operates single or double blind peer review. Reviewers should be careful not to reveal their identity to the authors, either in their comments or in metadata for reports submitted in Microsoft Word or PDF format.
            </p>
            <p class="pb-3 text-justify">
                <span class="text-red-600 font-bold">Note:</span> that reviewers are given access to all review reports for manuscripts they review via the online submission system after the final decision has been made.
            </p>

            <h2 class="text-blue-700 text-xl">Timely Review Reports</h2>
            <p class="pb-3 text-justify">
                ACE Publications aims to provide an efficient and high quality publishing service to authors and to the scientific community. We ask reviewers to assist by providing review reports in a timely manner. Please contact the editorial office if you require an extension to the review deadline.
            </p>

            <h2 class="text-blue-700 text-xl">Peer-Review and Editorial Procedure</h2>
            <p class="pb-3 text-justify">
                All manuscripts sent for publication in our journals are strictly and thoroughly peer-reviewed by experts (this includes research and review articles, spontaneous submissions, and invited papers). The Managing Editor of the journal will perform an initial check of the manuscript's suitability upon receipt. The Editorial Office will then organize the peer-review process performed by independent experts and collect at least two review reports per manuscript. We ask our authors for adequate revisions (with a second round of peer-review if necessary) before a final decision is made. The final decision is made by the academic editor (usually the Editor-in-Chief of a journal(s) or the Guest Editor of a Special Issue). Accepted articles are copy-edited and English-edited.
            </p>
            <p class="pb-3 text-justify">
                <span class="text-red-600 font-bold">Note:</span> that your recommendation is visible only to journal editors, not to the authors.
            </p>

            <h2 class="text-blue-700 text-xl">Rating The Manuscript</h2>
            <p class="pb-3 text-justify">
                Please rate the following aspects of the manuscript:
            </p>
            <div class="pb-3">
                <?php $array = [

                    'Originality/Novelty: Is the question original and well defined? Do the results provide an advance in current knowledge?',
                    'Significance: Are the results interpreted appropriately? Are they significant? Are all conclusions justified and supported by the results? Are hypotheses and speculations carefully identified as such?',
                    'Quality of Presentation: Is the article written in an appropriate way? Are the data and analyses presented appropriately? Are the highest standards for presentation of the results used?',
                    'Scientific Soundness: is the study correctly designed and technically sound? Are the analyses performed with the highest technical standards? Are the data robust enough to draw the conclusions? Are the methods, tools, software, and reagents described with sufficient details to allow another researcher to reproduce the results?',
                    'Interest to the Readers: Are the conclusions interesting for the readership of the Journal? Will the paper attract a wide readership, or be of interest only to a limited number of people?',
                    'Overall Merit: Is there an overall benefit to publishing this work? Does the work provide an advance towards the current knowledge? Do the authors have addressed an important long-standing question with smart experiments?',
                    'English Level: Is the English language appropriate and understandable?',

                ]; ?>

                <ul class="list-disc ml-10">
                    @foreach($array as $data)
                        <li class="text-justify my-2 pl-3">{{ $data }}</li>
                    @endforeach
                </ul>
                <p class="py-3 text-justify">
                    Manuscripts submitted to ACE Publications should meet the highest standards of publication ethics:
                </p>

                    <?php $array = [
                        'Manuscripts should only report results that have not been submitted or published before, even in part.',
                        'Manuscripts must be original and should not reuse text from another source without appropriate citation.',
                        'For biological studies, the studies reported should have been carried out in accordance with generally accepted ethical research standards.',

                    ]; ?>

                    <ul class="list-disc ml-10">
                        @foreach($array as $data)
                            <li class="text-justify my-2 pl-3">{{ $data }}</li>
                        @endforeach
                    </ul>

                <p class="italic text-justify pb-3 font-bold tracking-wide">
                    If reviewers become aware of such scientific misconduct or fraud, plagiarism or any other unethical behavior related to the manuscript, they should raise these concerns with the in-house editor immediately.
                </p>

            </div>

            <h2 class="text-blue-700 text-xl">Overall Recommendation</h2>
            <p class="pb-3 text-justify">
                Please provide an overall recommendation for the publication of the manuscript as follows:
            </p>
            <div class="pb-3 text-justify">
                <?php $array = [
                    'Accept in Present Form: The paper is accepted without any further changes.',
                    'Accept after Minor Revisions: The paper is in principle accepted after revision based on the reviewer\'s comments. Authors are given five days for minor revisions.',
                    'Reconsider after Major Revisions: The acceptance of the manuscript would depend on the revisions. The author needs to provide a point by point response or provide a rebuttal if some of the reviewer\'s comments cannot be revised. Usually, only one round of major revisions is allowed. Authors will be asked to resubmit the revised paper within ten days and the revised version will be returned to the reviewer for further comments.',
                    'Reject: The article has serious flaws, makes no original contribution, and the paper is rejected with no offer of resubmission to the journal.',
                ]; ?>

                <ul class="list-disc ml-10">
                    @foreach($array as $data)
                        <li class="text-justify my-2 pl-3">{{ $data }}</li>
                    @endforeach
                </ul>
            </div>
            <p class="pb-3 text-justify">
                <span class="text-red-600 font-bold">Note</span> that your recommendation is visible only to journal editors, not to the authors.
            </p>


            <h2 class="text-blue-700 text-xl">Review Report</h2>
            <p class="pb-3 text-justify">
                Review reports should contain:
            </p>
            <div class="pb-3 text-justify">
                <?php $array = [

                    'A brief summary (one short paragraph) outlining the aim of the paper and its main contributions.',
                    'Broad comments highlighting areas of strength and weakness. These comments should be specific enough for authors to be able to respond.',
                    'Specific comments referring to line numbers, tables or figures. Reviewers need not comment on formatting issues that do not obscure the meaning of the paper, as these will be addressed by editors.',
                    ]; ?>

                <ul class="list-disc ml-10">
                    @foreach($array as $data)
                        <li class="text-justify my-2 pl-3">{{ $data }}</li>
                    @endforeach
                </ul>
            </div>
            <p class="pb-3 text-justify">
                <span class="text-red-600 font-bold">Note</span> that ACE Publications follow several standards and guidelines, including those from the ICMJE (medical journals), CONSORT (trial reporting), TOP (data transparency and openness), PRISMA (systematic reviews and meta-analyses) and ARRIVE (reporting of in vivo experiments). Reviewers familiar with the guidelines should report any concerns they have about their implementation.
            </p>
            <p class="pb-3 text-justify">
                Your comments should not include an indication of whether you think the article should be accepted for publication. For further guidance on writing a critical review, please refer to the following documents:
            </p>
            <div class="pb-3 text-justify">
                <?php $array = [
                    'COPE Ethical Guidelines for Peer Reviewers. Committee on Publication Ethics. <a href="http://publicationethics.org/files/u7140/Peer review guidelines.pdf" class="text-blue-600 hover:underline">Available online.</a>',
                    'Hames, I. Peer Review and Manuscript Management in Scientific Journals: <a href="https://www.wiley.com/en-au/Peer+Review+and+Manuscript+Management+in+Scientific+Journals%3A+Guidelines+for+Good+Practice-p-9781405131599" class="text-blue-600 hover:underline">Guidelines for Good Practice</a>. Wiley-Blackwell: Oxford, UK, 2007.',
                    'Writing a journal article review. Australian National University: Canberra, Australia, 2010. <a href="https://academicskills.anu.edu.au/node/492" class="text-blue-600 hover:underline">Available online</a>.',
                    'Golash-Boza, T. How to write a peer review for an academic journal: Six steps from start to finish. <a href="http://www.phd2published.com/2012/05/09/how-to-write-a-peer-review-for-an-academic-journal-six-steps-from-start-to-finish-by-tanya-golash-boza/" class="text-blue-600 hover:underline">Available online</a>.',
                ]; ?>

                <ul class="list-disc ml-10">
                    @foreach($array as $data)
                        <li class="text-justify my-2 pl-3">{!! $data !!}</li>
                    @endforeach
                </ul>
            </div>


        </div>
    </div>
@endsection
