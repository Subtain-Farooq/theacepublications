@extends('frontend.layouts.app')

@section('content')
    <div class="bg-white">
        <div class="container mx-auto px-4 my-12">

            <div class="flex justify-center">
                <h1 class="text-2xl text-white  bg-blue-800 px-8 text-center inline-block mb-5">Editorial Process (Peer Review Process)</h1>
            </div>

            <p class="pb-3 text-justify">
                All types of contribution to ACE Publications, except editorials, are peer-reviewed. The peer review process focuses on whether the work is done to high scientific and ethical standards and is appropriately described, and that the data support the conclusions. The role of peer review is considered to be helping authors improve their manuscripts rather than deciding whether they should be published. The editor makes the final decision.
            </p>
            <p class="pb-3 text-justify">
                ACE Publications aims to provide authors with professional, fair, timely and confidential peer reviews by the field experts. The review consists of the following steps:
            </p>

            <h2 class="text-blue-700 text-xl">Initial Screening</h2>
            <p class="pb-3 text-justify">
                After a paper is submitted to a journal, Executive Managing Editor (EME) will screens the manuscript and decides whether or not to send it for full peer review. This is to ensure adherence to our policies, including statement of competing interests, ethical requirements for studies involving human participants or animals, as well as unacceptably low standard language. For example, the editor will ask:
            </p>
            <div class="pb-3 text-justify">
                <?php
                    $array = [
                        'Does the manuscript fit the journal\'s scope and will it be of interest to the readership?',
                        'Is the manuscript of acceptable quality?',
                        'Is the writing good enough to make it worth reviewing?',
                        'Is the manuscript compliant with the journal\'s instruction for authors?',
                    ];
                ?>

                <ul class="list-disc list-inside pb-3">
                    @foreach($array as $data)
                        <li class="ml-5">{{ $data }}</li>
                    @endforeach

                </ul>

                <p class="pb-3 text-justify">
                    The author(s) may be asked for revision. Only after clearing the initial screening is the manuscript sent to peer reviewers. Manuscripts may be declined by the EME, without a full review, nor being asked for revision, if they are inconsistent with our Editorial Guidelines.
                </p>
            </div>

            <h2 class="text-blue-700 text-xl">Review</h2>
            <p class="pb-3 text-justify">
                Manuscripts are assigned by the Executive Managing Editor, to one of the Editorial Board Member, and two to four reviewers. External referees are consulted when additional expertise is required. All reviewers are working scientists and therefore are in the best position to judge the quality and importance of the work. All board members and referees who review a manuscript remain unknown to the authors. Every manuscript is treated by the editors and reviewers as privileged information, and they are instructed to exclude themselves from review of any manuscript that might involve a conflict of interest. The reviewers make a recommendation to accept, revise, or decline a paper based upon the scientific merit and technical quality of the studies reported.
            </p>

            <h2 class="text-blue-700 text-xl">Decision</h2>
            <p class="pb-3 text-justify">
                Editors have the option of accepting, recommending modification, recommending additional external review, or rejecting. If the decision is Minor Revision or Major Revision, the authors have 30 days to resubmit a revised manuscript. Upon resubmission, the academic editor may choose to return the manuscript to the reviewers, or may render a decision based on his/her personal expertise. ACE Publications aims to provide authors with an initial decision within three weeks. After acceptance, manuscripts are published online within one week after proofreading.
            </p>

            <h2 class="text-blue-700 text-xl">Proof reading</h2>
            <p class="pb-3 text-justify">
                You can annotate and add comments in a Word document. If, for any reason, this is not possible, mark the corrections and any other comments on a printout of your proof and return by scan the pages and email to crm@theacepublications.com. Please use this proof only for checking the typesetting, editing, completeness and correctness of the text, tables and figures. Significant changes to the article as accepted for publication will be considered at this stage only with permission from the editor. We will do everything possible to get your article published quickly and accurately; please reply with your corrections within 48 hours. Proofreading is solely your responsibility.
            </p>
            <p class="pb-3 text-justify">
                <span class="text-red-600 font-bold">Note</span> that ACE Publications may proceed with the publication of your article, with no further editing, if no response is received.
            </p>

            <h2 class="text-blue-700 text-xl">Complaint policy</h2>
            <p class="pb-3 text-justify">
                If you wish to appeal a decision, you should email the editor who handled the whole submission inquiry and review process, explaining in detail your reasons for any complaints or the appeal. The email should be sent to editor@theacepublications.com. Appeals will only be considered when a reviewer or editor is thought to have a significant error or bias, or when the objectivity is compromised by a documented competing interest. Either of these reasons would change the original decision. All appeals will be discussed with another one editor, with a total number of three editors involved. Majority rule will be applied. The processing of appeals will usually take no longer than two weeks. While under appeal, a manuscript remains under formal consideration and hence should not be submitted for consideration elsewhere. We do not consider second appeals.
            </p>

            <h2 class="text-blue-700 text-xl">The Flow chart of peer review and editorial Decision Process</h2>
            <div class="pb-3 flex justify-center">
                <img class="object-center" src="{{ url('images/background/picture1.png') }}">
            </div>


            <h1 class="text-blue-800 text-2xl mb-3">FAQ For Peer Review Process:</h1>
            <p class="text-gray-800 font-bold mb-2">Question 1:<br>
                How are the peer reviewers identified, and who makes the final selection of the peer reviewers?
            </p>
            <p class="pb-3 text-justify">
                All manuscripts submitted to the journal(s) of ACE Publications that are selected for peer review are sent to two-four independent reviewers, selected by the editors. Authors are welcome to suggest suitable independent reviewers and may also request that the journal excludes individuals or laboratories. The editor will carefully consider such requests, since studies have found that author recommended peer reviewers tend to recommend acceptance more often than journal recommended reviewers.
            </p>
            <p class="pb-3 text-justify">
                Peer reviewers are ideally experts in their field. We have built a panel of over 150 peer reviewers that have a good track record of producing high quality reviews. We scanned the bibliography to identify potential reviewers or contact researchers.
            </p>
            <p class="pb-3 text-justify">
                Reviewer selection is critical to the publication process, and the editors will base their selection on many factors, including expertise, publication records, reputation, prior reviewing experience or personal knowledge and specific recommendations. The editors will avoid using people who are slow, careless, or do not provide reasoning for their views.
            </p>
            <p class="pb-3 text-justify">
                The editors will check with potential reviewers before sending them manuscripts to review. Reviewers should bear in mind that these messages contain confidential information, which should be treated as such.
            </p>
            <p class="pb-3 text-justify">
                Editors will make the final selection of peer reviewers who have sufficient expertise to fairly judge the manuscript
            </p>


            <p class="text-gray-800 font-bold mb-2">Question 2:<br>
                Who assesses reviewer reports and makes a decision on the submission, and how is the final decision reached?

            </p>
            <p class="pb-3 text-justify">
                We ask peer-reviewers to submit their reports via our secure online system by following the link provided in the editor's email.
                The editors can assess these reviewer reports and make all decisions (acceptance, rejection, and revision). Editorial decisions are not a matter of counting votes or numerical rank assessments, and we do not always follow the majority recommendation. The editors try to evaluate the strength of the arguments raised by each reviewer and by the authors, and may also consider other information not available to either party. Our primary responsibilities are to our readers and to the scientific community at large, and in deciding how best to serve them.
            </p>
            <p class="pb-3 text-justify">
                It is common for peer reviewers to give conflicting feedback on the same manuscript, and the Editor seeks to offer guidance to authors on how to proceed in pursuing a revision. The journal editor might choose to send the paper to another reviewer before arriving at a decision, and the author may have to wait longer for the peer review process to be completed.
            </p>
            <p class="pb-3 text-justify">
                In brief, the editor who handles papers reach a decision to accept or reject papers based on reviewers' comments and their own opinion of the papers' publication worthiness.
            </p>


            <p class="text-gray-800 font-bold mb-2">Question 3:<br>
                Who communicates the decision to the authors?

            </p>
            <p class="pb-3 text-justify">
                The editor who handles the manuscript.
            </p>

            <p class="text-gray-800 font-bold mb-2">Question 4:<br>
                How is the revised manuscript assessed?
            </p>
            <p class="pb-3 text-justify">
                There are three options for the editors. The editor makes decisions based on the revision and his/her own experience, without sending a resubmitted paper back to the reviewers;
            </p>


            <h2 class="text-blue-700 text-xl">Back to reviewers</h2>
            <p class="pb-3 text-justify">
                We ask that reviewers should be willing to provide follow-up advice as requested. Revised manuscripts, along with the document detailing the authors' responses to the reviewers' comments and related text changes, are normally returned to the original panel of reviewers for reassessment, especially when
            </p>

            <?php
            $array = [
               'The original concerns were substantial, or',
               'The reviewers disagree with each other, or',
               'Where the authors believe they have been misunderstood on points of fact.',
                ];
            ?>

            <ul class="list-disc list-inside">
                @foreach($array as $data)
                    <li class="ml-5">{{ $data }}</li>
                @endforeach
            </ul>


            <h2 class="text-blue-700 text-xl pt-4">Additional reviewers</h2>
            <p class="pb-3 text-justify">
                We occasionally bring in additional reviewers to resolve disputes between reviewers, but we prefer to avoid doing so unless there is a specific issue, for example a specialist technical point, on which we feel a need for further advice.
            </p>
            <p class="pb-3 text-justify">
                The acceptance of a revised manuscript is not guaranteed, but the decision letter will usually provide general guidance intended to be helpful in achieving that end.
            </p>

            <p class="text-gray-800 font-bold mb-2">Question 5:<br>
                What is the role of the editorial board in the peer review process?
            </p>
            <p class="pb-3 text-justify">
                The editorial board has the ultimate responsibility and authority for the editorial decision-making.
            </p>

            <p class="text-gray-800 font-bold mb-2">
                Question 6:<br>
                Who is responsible for the final decision to accept, revise or reject the article?

            </p>
            <p class="pb-3 text-justify">
                The editor who handles the manuscript.
            </p>


        </div>
    </div>
@endsection
