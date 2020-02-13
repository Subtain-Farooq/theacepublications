@extends('frontend.layouts.app')

@section('content')
    <div class="bg-white">
        <div class="container mx-auto px-4 my-12">

            <div class="flex justify-center">
                <h1 class="text-2xl text-white  bg-blue-800 px-8 text-center inline-block mb-5">Guideline For Editors</h1>
            </div>

            <h2 class="text-blue-700 text-xl">Open Access</h2>
            <p class="pb-3 text-justify">
                ACE Publications is a peer reviewed open access international journal(s) dedicated to publish scientifically sound research work from around the world. It means that readers can access published material for free, without paying a subscription charge. Articles published in ACE Publications are freely available immediately after publication. This means that researchers, students, and interested lay people from anywhere in the world have rapid access to the latest research through ACE Publications. We finance publication through article processing charges (APC), paid by the authors and their institutions. APCs covers the cost of managing the peer review process, professional copy-editing, and promotion of the published research ACE Publications has no other source of income. For authors, open access provides a potentially wider circle of readers for their research papers, with some research suggesting that open access papers are more highly cited.
            </p>

            <h2 class="text-blue-700 text-xl">Editorial Offices</h2>
            <p class="pb-3 text-justify">
                The Editorial Office of ACE Publications is located in Dubai, UAE. The in-house staff consists of Managing Editors, Assistant Editors, Production Editors, English Editors, Copyeditors, Data Specialists, Software Engineers and Administrative Specialists. Our collaborating editors on our Editorial Board are typically employed in academic institutions or corporate research facilities located all over the world. The contact with the in-house editorial staff is mainly by e-mail and telephone. Assistant Editors process manuscripts through the peer-review and production procedures; Managing Editors have the editorial responsibility for the journals; Production Editors, English Editors, Copy editors and Data Specialists are responsible for putting accepted content into a publishable format (full-text PDF, XML and HTML versions).
            </p>

            <h2 class="text-blue-700 text-xl">Editorial Process, Peer-Review and Production</h2>
            <p class="pb-3 text-justify">
                Articles submitted to ACE Publications are subject to strict peer-reviewing. ACE Publications operates double blind peer-review (the reviewers do not know the authors' identities until the paper has been published). The online submission system of ACE Publications; Registration, incorporates online tools for manuscript submission, peer-reviewing and editorial decision making.
            </p>
            <p class="pb-3 text-justify">
                Once a manuscript is submitted, the submission is received by the in-house Managing Editor who will subsequently coordinate the whole editorial process for the manuscript: peer-review, decision-making, possible authors' revision, manuscript acceptance, copy editing, English editing, proofreading and final publication. An in-house Academic Editor will be assigned to the submitted article and will send review invitations.
            </p>
            <p class="pb-3 text-justify">
                At least two reports per manuscript are collected for each manuscript—three if the first two differ substantially. Reviewers must hold a PhD, have not published with the authors in the previous five years, and have recent publications in the field of the submitted manuscript.
            </p>
            <p class="pb-3 text-justify">
                The Editor-in-Chief, Guest Editor, or a suitable editorial board member can make the final acceptance or rejection decision for a manuscript, usually after author revision. We typically allow no more than two rounds of major revisions.
            </p>
            <p class="pb-3 text-justify">
                After acceptance of an article for publication, the in-house editorial staff will organize the production of the paper, which entails copy editing, English editing and final production in preparation for publication on the journal website. ACE Publications is structured in yearly volumes and either monthly or quarterly issues. Nevertheless, articles are published online immediately after acceptance and production.
            </p>

            <h2 class="text-blue-700 text-xl">Editor-In-Chief Responsibilities</h2>
            <p class="pb-3 text-justify">
                The Editor-in-Chief is the head of the journal, and is mainly responsible for the scientific quality of the journal. ACE Publications does not need the Editor-in-Chief to be actively involved in the editorial process, i.e. the editorial team will take care of the majority of contact with authors and reviewers.
            </p>
            <p class="pb-3 text-justify">
                The Editor-in-Chief is responsible for assisting the Editorial Office in the management of the journal, which entails:
            </p>

            <?php
                $array = [
                    'Scientific decisions about the journal\'s scope,',
                    'Inviting distinguished scientists to join the editorial board,',
                    'Suggesting topics for special issues,',
                    'Assisting the Guest Editors in the setup of special issues,',
                    'Overviewing the editorial process for individual manuscripts (mainly by taking the final decision whether a paper can be published after peer-review and revisions).',
                ];
            ?>

            <ul class="list-disc ml-10">
                @foreach($array as $data)
                    <li class="text-justify my-2 pl-3">{{ $data }}</li>
                @endforeach
            </ul>

            <p class="text-justify pb-4 pt-4">The Editor-in-Chief position is honorary. As a reward for the efforts, the Editor-in-Chief can publish his/her papers free of charge. The initial term of the Editor-in-Chief position is three years and can be renewed.</p>

            <h2 class="text-blue-700 text-xl">Editorial Board Member Responsibilities:</h2>
            <p class="pb-3 text-justify">
                An Editorial Board member will be asked to review one or two manuscripts per year and may help to edit a special issue on a topic related to his or her research interests. Additionally, the Editorial Board members will be approached for input or feedback regarding new regulations relating to the journal from time to time. Editorial Board members are also encouraged to help to promote the journal among their peers or at conferences. The communication with Editorial Board members is done primarily by E-mail. The initial term for an Editorial Board membership is two years and can be renewed. An Editorial Board member may also step down from the position at any time if he or she feels overloaded by the requests from the journal's Editorial Office.
            </p>

            <h2 class="text-blue-700 text-xl">Guest Editor Responsibility / Guest Editing A Special Issue</h2>
            <p class="pb-3 text-justify">
                We appreciate collaborations with scholars all over the world. Special issues are normally edited by a Guest Editor who invites colleagues from the same research field to contribute an article on a topic within their expertise. The Guest Editor works together with the Editorial Office to prepare a description and keywords for the special issue web page. We aim for at least ten articles published per special issue. Often, the Guest Editor will also write an editorial paper for the special issue. The Guest Editor usually makes decisions on the acceptance of manuscripts submitted to his or her special issue (depending on the journal's policy — in some cases they may make a recommendation to the Editor-in-Chief). Papers belonging to a special issue are published online in the journal immediately after acceptance and collected together on the special issue webpage. This means that there is no delay for authors who submit their work: it will appear shortly after acceptance, even if other papers in the special issue are still being processed.
            </p>
            <p class="pb-3 text-justify">
                Guest Editors should not hold conflicts of interest with authors whose work they are assessing, e.g. if they are from the same institution or collaborate closely. In this case the Editor-in-Chief or a suitable editorial board member will make final acceptance decisions for submitted papers.
            </p>

        </div>
    </div>
@endsection
