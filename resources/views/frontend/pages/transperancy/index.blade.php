@extends('frontend.layouts.app')

@section('content')
    <div class="bg-white">
        <div class="container mx-auto px-4 my-12">

            <div class="flex justify-center">
                <h1 class="text-2xl text-white  bg-blue-800 px-8 text-center inline-block mb-5">Transparency Policy</h1>
            </div>

            <p class="pb-3 text-justify">
                <a href="{{ route('editorial-process') }}" class="text-blue-700">Peer review process:</a> All of a journal's content, apart from any editorial material that is clearly marked as such, will be subjected to peer review. Peer review is defined as obtaining advice on individual manuscripts from reviewers, expert in the field who are not part of the journal's editorial staff. This process, as well as any policies (put link of editorial policy) related to the journal's peer review procedures, has been clearly described on the journal's Web site.
            </p>
            <p class="pb-3 text-justify">
                Governing Body: The relevant journal has editorial board whose members are recognized experts in the subject areas included within the journal's scope. The full names and affiliations of the journal's editors have been provided on the journal's Web site.
            </p>
            <p class="pb-3 text-justify">
                Editorial team/contact information: The journal provides the full names and affiliations of its editors on its Web site as well as contact information for the editorial office.
            </p>

            <p class="pb-3 text-justify">
                <a href="{{ route('article-processing') }}" class="text-blue-700">Author fees :</a> Any fees or charges that are required for manuscript processing and/or publishing materials in the journal has been clearly stated in a place that is easy for potential authors to find prior to submitting their manuscripts for review or explained to authors before they begin preparing their manuscript for submission.
            </p>
            <p class="pb-3 text-justify">
                <a href="{{ route('licensing-copyrights') }}" class="text-blue-700 hover:underline">Copyright: </a> Copyright and licensing information shall be clearly described on the journal's Web site, and licensing terms shall be indicated on all published articles, both HTML and PDFs.
            </p>
            <p class="pb-3 text-justify">
                <span class="text-bold">Identification of and dealing with allegations of research misconduct:</span> ACE Publications will take reasonable steps to identify and prevent the publication of papers where research misconduct has occurred, including plagiarism, citation manipulation, and data falsification/fabrication, among others. In no case shall a journal or its editors encourage such misconduct, or knowingly allow such misconduct to take place. In the event that a journal's publisher or editors are made aware of any allegation of research misconduct relating to a published article in the journal – the publisher or editor shall follow COPE's guidelines (or equivalent) in dealing with allegations. See <a href="#">here</a>.
            </p>

            <p class="pb-3 text-justify">
                <b>Web site:</b> Web site of ACE Publications, including the text that it contains, has demonstrated that care has been taken to ensure high ethical and professional standards.
            </p>

            <p class="pb-3 text-justify">
                <b>Name of journal:</b> The Journal name in ACE Publications is clear and is not one that is easily confused with another journal or that might mislead potential authors and readers about the Journal's origin or association with other journals.
            </p>
            <p class="pb-3 text-justify">
                <span class="text-blue-600">Conflicts of interest:</span> The journal in ACE Publications has clear policies on handling potential conflicts of interest of editors, authors, and reviewers and the policies should be clearly stated.
            </p>
            <p class="pb-3 text-justify">
                <b>Access:</b> The way(s) in which the journal and individual articles are available to readers and whether there are associated subscription or pay per view fees have been stated. We are open-accessed journal.
            </p>

            <p class="pb-3 text-justify">
                <a href="{{ route('article-processing') }}" class="text-blue-600 hover:underline">Revenue sources</a>: Business models or revenue sources (e.g., author fees, subscriptions, advertising, reprints, institutional support, and organizational support) has been clearly stated.
            </p>
            <p class="pb-3 text-justify">
                <b>Advertising:</b> We don't accept advertisement now.
            </p>
            <p class="pb-3 text-justify">
                <b>Archiving:</b> The journal's plan for electronic backup and preservation of access to the journal content is via Asian Digital Library in the event a journal is no longer published.
            </p>
            <p class="pb-3 text-justify">
                <b>Direct marketing:</b> Any direct marketing activities, including solicitation of manuscripts that are conducted on behalf of the journal, shall be appropriate, well targeted, and unobtrusive.
            </p>


        </div>
    </div>
@endsection
