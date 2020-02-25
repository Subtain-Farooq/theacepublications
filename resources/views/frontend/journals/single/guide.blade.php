@extends('frontend.layouts.app')

@section('content')
    <div class="bg-white">
        <div class="container mx-auto px-4">
            <div class="mt-8 mb-6">
                <nav class="text-black font-bold " aria-label="Breadcrumb">
                    <ol class="list-none p-0 inline-flex">
                        <li class="flex items-center text-blue-700">
                            <a href="{{ route('home') }}" class="">Home</a>
                            <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
                        </li>
                        <li class="flex items-center text-blue-700">
                            <a href="{{ route('journals') }}">Journals</a>
                            <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
                        </li>
                        <li class="flex items-center text-blue-700">
                            @foreach($journal->categories as $category)
                                @if($loop->first)
                                    <a href="{{ route('journals.bySubject', ['id' => $category->id]) }}">
                                        {{ $category->name }}
                                    </a>
                                @endif
                            @endforeach
                            <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
                        </li>
                        <li>
                            <span class="text-gray-500" aria-current="page">{{ $journal->name }}</span>
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="flex flex-wrap overflow-hidden md:-mx-2 lg:-mx-3 xl:-mx-3 mb-16">
                <div class="w-full overflow-hidden md:my-2 md:px-2 md:w-2/6 lg:my-3 lg:px-3 lg:w-2/6 xl:my-3 xl:px-3 xl:w-2/6">
                    @include('frontend.journals.shared-sidebar')
                </div>

                <div class="w-full overflow-hidden md:my-2 md:px-2 md:w-4/6 lg:my-3 lg:px-3 lg:w-4/6 xl:my-3 xl:px-3 xl:w-4/6">
                    @include('frontend.journals.single.shared-title')
                    <div class="text-gray-800 text-justify mt-8 ">
                        <div class="my-1">
                            <h1 class="text-2xl main-font font-bold text-blue-800 border-l-4 border-blue-800 inline-block pl-2">Guide to Authors</h1>
                            
                            <div class="">
                                <p class="my-4 text-justify">
                                    The foundations of all journals under ACE are wholly based on originality and creativity that authors of all publications are required to maintain while writing their papers. Authors are invited to submit the papers through.
                                </p>
                                <p class="my-4 text-justify">
                                    <span class="text-gray-800 font-medium text-xl">E-Mail: acepublicationsdxb@gmail.com</span>  Submissions must be unique and should not have been published earlier or be under consideration for publication while being evaluated for this Journal. ACE Publications is committed to publish quality and valuable scientific contributions to our journals.
                                </p>
                            </div>
                        </div>
                        <div class="my-1">
                            <h1 class="text-3xl main-font font-bold text-blue-900">Articles</h1>
                            <div class="">
                                <p class="text-justify">
                                    Types of Articles could be submitted
                                </p>
                                <?php $articles = ['Original articles', 'Research articles', 'Reviews articles', 'Mini-reviews', 'Case report', 'Editorials', 'Letter to Editor', 'Short reports'] ?>
                                <ul class="list-disc list-inside my-5">

                                    @foreach($articles as $article)
                                        <li class="my-1">
                                            {{ $article }}
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>

                        <div class="my-1">
                            <h1 class="text-3xl main-font font-bold text-blue-900">Word Processing Formats</h1>
                            <div class="">
                                <p class="text-justify">
                                    The following word processor file formats will be accepted for the manuscript document for all the ACE Journals.
                                </p>
                                <?php $articles = [ 'Microsoft Word 2003(doc)', 'Microsoft Word 2007(docx)'] ?>
                                <ul class="list-disc list-inside my-5">

                                    @foreach($articles as $article)
                                        <li class="my-1">
                                            {{ $article }}
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>

                        <div class="my-1">
                            <h1 class="text-3xl main-font font-bold text-blue-900">Format of Manuscript</h1>
                            <div class="">
                                <p class="text-justify">
                                    The authors may please ensure that the length of their manuscript is between 5 and 13 pages. ACE will accept any manuscript which is either shorter or longer than the prescribed limit, if the content is of extraordinarily high value.
                                </p>
                                <p class="text-justify my-4">
                                    The manuscript should contain the items mentioned here under.
                                </p>
                                <?php $articles = [ 'Cover Letter', 'Title & List of authors with addresses of authors', 'Abstract', 'Introduction', 'Keywords', 'Materials and Methods', 'Results and Discussion', 'Conclusion', 'Acknowledgements (optional)', 'References', 'Figures', 'Tables'] ?>
                                <ul class="list-disc list-inside my-5">

                                    @foreach($articles as $article)
                                        <li class="my-1">
                                            {{ $article }}
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>

                        <div class="my-1">
                            <h1 class="text-3xl main-font font-bold text-blue-900">Cover Letter</h1>
                            <div class="">
                                <p class="text-justify">
                                    While submitting the manuscript author is requested to provide cover letter along with the manuscript. This cover letter should include manuscript title, name of the co-authors if any and full contact details of the corresponding author with office or institutional address, telephone, fax and email address. Corresponding author should clearly state the approval of co-authors for manuscript submission along with any competing interests. It is also strongly advised to declare that work is original and not submitted/ published elsewhere with other publishers.
                                </p>

                            </div>
                        </div>

                        <div class="my-1">
                            <h1 class="text-3xl main-font font-bold text-blue-900">Title and Authors Information</h1>
                            <div class="">
                                <p class="text-justify">
                                    In “Title and Authors Information” part, the following information should be included
                                </p>
                                <p class="text-justify my-4">
                                    The manuscript should contain the items mentioned here under.
                                </p>
                                <?php $articles = [ 'Paper title/ Manuscript Title', 'Complete author names, including Co- authors names also', 'Complete institutional mailing addresses', 'Email addresses'] ?>
                                <ul class="list-disc list-inside my-5">

                                    @foreach($articles as $article)
                                        <li class="my-1">
                                            {{ $article }}
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>

                        <div class="my-1">
                            <h1 class="text-3xl main-font font-bold text-blue-900">Abstract</h1>
                            <div class="">
                                <p class="text-justify">
                                    Abstract section should be self-contained and must be citation-free. The manuscript should contain an abstract according to kind of manuscript. It should not exceed 200 words.
                                </p>

                            </div>
                        </div>
                        <div class="my-1">
                            <h1 class="text-3xl main-font font-bold text-blue-900">Keywords</h1>
                            <div class="">
                                <p class="text-justify">
                                    Please provide 6 to 10 keywords.
                                </p>

                            </div>
                        </div>

                        <div class="my-1">
                            <h1 class="text-3xl main-font font-bold text-blue-900">Introduction</h1>
                            <div class="">
                                <p class="text-justify">
                                    This section should be concise, with no subheadings.
                                </p>

                            </div>
                        </div>
                        <div class="my-1">
                            <h1 class="text-3xl main-font font-bold text-blue-900">Materials and Methods</h1>
                            <div class="">
                                <p class="text-justify">
                                    This section should contain adequate detailed information what all the procedures and steps followed. It can be divided into subsections if several methods are described.
                                </p>

                            </div>
                        </div>
                        <div class="my-1">
                            <h1 class="text-3xl main-font font-bold text-blue-900">Results and Discussion</h1>
                            <div class="">
                                <p class="text-justify">
                                    In this section should be described on results and out puts of the research work.
                                </p>

                            </div>
                        </div>
                        <div class="my-1">
                            <h1 class="text-3xl main-font font-bold text-blue-900">Conclusions </h1>
                            <div class="">
                                <p class="text-justify">
                                    This should clearly explain the important conclusions of the work highlighting its significance and relevance.
                                </p>
                            </div>
                        </div>
                        <div class="my-1">
                            <h1 class="text-3xl main-font font-bold text-blue-900">Acknowledgements</h1>
                            <div class="">
                                <p class="text-justify">
                                    All acknowledgments (if any) should be included at the extremely end of the manuscript prior to references part. This section may include supporting grants, presentations, and so forth.
                                </p>
                            </div>
                        </div>

                        <div class="my-1">
                            <h1 class="text-3xl main-font font-bold text-blue-900">References</h1>
                            <div class="">
                                <p class="text-justify">
                                    Citations must be numbered consecutively in square brackets [1]. The list of references should be arranged in the order of citation in text, not in alphabetical order. Reference to journal articles [1], textbooks [2], chapters in books [3], papers in conference proceedings [4], Thesis or Dissertation [5] and patents [6] should provide sufficient information as in the samples.
                                </p>
                                <span class="inline-block pt-6 text-gray-700 font-bold">
                        (PERIODICAL STYLE)
                    </span>
                                <?php $articles = [
                                    'Dabadie R., Polard D., Hussy S. and Verma K. G., Biochemical aspects of air pollution induced injury symptoms of some common ornamental road side plants, Int. J. Res. BioSciences. 4(2), 50 (2000). (Book style)',
                                    'A. Cichocki and R. Unbehaven, Neural Networks for Optimization and Signal Processing, 1st ed. Chichester, U.K.: Wiley, 1993, ch. 2, pp. 45-47. (Book Chapter)',
                                    'Balaban O., Applications of Biotechnology in Science, Academic Press, Paris, 151 (1985). (Conference Proceedings style)',
                                    'Anderson R., Vance D., Hussy S. and Swift G., The litter and soil with special reference to their seasonal changes, Conference Proceeding, Int. Conference on Biodiversity, Pp 144-150, (2000). (Thesis or Dissertation style)',
                                    'Songwe N. C., Litter production and decomposition in a tropical rainforest, Southern Bankundu Forest Reserve, Cameroon, Ph.D. Thesis University of lbadan. Nigeria. Pp. 209 (1984) (Patent style)',
                                    'J. P. Wilkinson, “Nonlinear resonant circuit devices,” U.S. Patent 3 624 12, July 16, 1990.'

                                ] ?>
                                <ul class="list-disc list-outside ml-5 my-5">

                                    @foreach($articles as $article)
                                        <li class="my-4">
                                            {{ $article }}
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>

                        <div class="my-1">
                            <h1 class="text-3xl main-font font-bold text-blue-900">Figures</h1>
                            <div class="">
                                <p class="text-justify">
                                    Upon submission of an article, authors are supposed to include all figures and tables in the PDF/ Word file of the manuscript. Figures and tables must be submitted in individual files. Figures should be labelled below the figure.
                                </p>
                            </div>
                        </div>
                        <div class="my-1">
                            <h1 class="text-3xl main-font font-bold text-blue-900">Preparation of Tables</h1>
                            <div class="">
                                <p class="text-justify">
                                    Each table must have a descriptive title and if numerical measurements are given, the units should be included in the column heading.
                                </p>
                            </div>
                        </div>
                        <div class="my-1">
                            <h1 class="text-3xl main-font font-bold text-blue-900">Article Withdrawal Policy</h1>
                            <div class="">
                                <p class="text-justify">
                                    The articles submitted to ACE Publications can be withdrawn either by the submitted authors or the publisher. The article can be withdrawn anytime before it is published officially on the journal page with detailed information on volume. Issue, page numbers etc. If the authors wants to withdraw the article, we insist for a signed statement from the all the co-authors to journal’s editorial office via mail. If editorial office/ publisher find any violation in publishing ethics, guidelines, duplicate submission, plagiarism, etc., publishers holds the right to with draw/ reject the manuscript at any stage of publishing process.
                                </p>
                            </div>
                        </div>
                        <div class="my-1">
                            <h1 class="text-3xl main-font font-bold text-blue-900">Publication Fee</h1>
                            <div class="">
                                <p class="text-justify">
                                    ACE Publications requires support from an author’s research budget, or by their supporting institution as Article Processing Charges (APC) US $ 250.00 to cover the expenses of the entire Peer Review System, Journal Development, Administration Process, Online Hosting and Permanent Archiving of the Article submitted to us. If authors need hard copy of journal than authors should pay US $ 200.00 extra as hard copy and postal charges.
                                </p>
                            </div>
                        </div>
                        <div class="my-1">
                            <h1 class="text-3xl main-font font-bold text-blue-900">Refund Policy</h1>
                            <div class="">
                                <p class="text-justify">
                                    ACE Publications will not offer refunds for Open Access once articles have been published/ withdrawn.
                                </p>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
