@extends('frontend.layouts.app')

@section('content')

    <div class="bg-white px-32">
        <div class="container mx-auto my-12">
            <div class="">
                <div class="flex justify-center">
                    <h1 class="text-2xl tracking-wide text-white main-font bg-blue-800 px-8 text-left inline-block mb-5">Guidelines for Authors</h1>
                </div>
                <div class="">
                    <p class="my-1 text-justify">
                        As an international, multi-disciplinary, peer-refereed journal(s), provides a platform for publication of the most advanced scientific research in the areas of agricultural sciences, Business Studies and Management Sciences, Chemistry, Engineering and Technology Sciences, Humanities and Social Sciences, Life Science, Medical Sciences, Mathematics, Physics and Pharmaceutical sciences. The journal(s) welcomes the original empirical investigations.
                    </p>
                    <p class="my-4 text-justify">
                        <span class="font-bold"> Submission Checklist:</span>    Before submitting your manuscript, thoroughly check its quality one more time. Evaluate it critically could anything be done better?</p>
                </div>
            </div>

            <div class="py-2">
                <div class="">
                    <p class="text-justify">
                        Be sure that:
                    </p>
                    <?php $articles = [
                        'The manuscript follows the Instructions for Authors',
                        'All files are in the correct format and of the appropriate resolution or size',
                        'The spelling and grammar are correct',
                        'You have mentioned contact information for all authors',
                        'You have written a persuasive cover letter',
                        'You have read the Aims & Scope carefully and ensure that your manuscript falls within the scope for this journal',
                        'Use the Microsoft Word template to prepare your manuscript;',
                        'Issues about publication ethics, research ethics, copyright, authorship, figure formats, data and reference format have been considered appropriately'
                    ] ?>
                    <ul class="list-disc ml-10">

                        @foreach($articles as $article)
                            <li class="text-justify my-2 pl-3">
                                {{ $article }}
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>

            <div class="py-2">
                <h1 class="text-xl text-blue-700">What To Submit?</h1>
                <div class="">
                    <p class="text-justify">
                        Heading forward from Traditional Publishing has its own type of articles to be submitted and published. If you are planning to submit your article to ACE Publications please choose one of the suitable categories for your article and summarize it within the proposed word limit before submission
                    </p>
                    <?php
                    $template = url("files/manuscript-template.pdf");
                    $articles = [
                        "<b>Primary Research</b> (Word Limit 2000 – 3000) that contributes to the base of scientific knowledge, including interdisciplinary, replication studies, and negative or null results. Download the <a href='http://theacepublications.test/files/manuscript-template.pdf' class='text-blue-500 hover:underline' download> Manuscript Template</a>.",
                        '<b>Systematic Reviews</b> (Word Limit 3000 - 3500) whose methods ensure the comprehensive and unbiased sampling of existing literature. Download <a href="http://theacepublications.test/files/systematic reviews and meta.pdf" download class="text-blue-500 hover:underline"> Detailed Guidelines</a> ',
                        '<b>Executive Summary</b> (Word Limit 800 – 1000) includes a thorough overview of a research problem that provides key points for its readers, saving their time and preparing them to understand the scientific Approach. It must be written in such a summarized way that readers can rapidly become acquainted with a large set of data without needing the explanatory procedures. Download <a href="http://theacepublications.test/files/executive summary.pdf" download class="text-blue-500 hover:underline"> Detailed Guidelines</a> to prepare your Executive Summary.',
                        '<b>Short Communications</b> (Word Limit 1000-1500) are short papers that present original and significant material for rapid dissemination. For example, a Short Communication may focus on a particular aspect of a problem or a new finding that is expected to have a significant impact. Short communication should be submitted the same way as a full-length paper. A maximum of 1500 words in the main text plus approximately ten references and normally no more than two illustrations (tables or figures or one of each). Short Communications should follow the same layout as primary research paper.',
                        '<b>Editorials</b> (Word Limit 1000) are short, invited opinion pieces that discuss an issue of immediate importance to the research community. Editorials should have fewer than 1000 words total, no abstract, a minimal number of references (definitely no more than 5), and no figures or tables (although they do have a photograph of the author as an illustration).',
                        '<b>Focus</b> (Word Limit 2500) articles are short, timely pieces that spotlight either recent research findings or policy issues related to research (for example, regulatory, funding, educational, or legislative discussions). Focus articles should not exceed 2500 words total (including abstract, main text, references and figure legend). They should have a short pithy title, a one-sentence abstract, no more than 10 references, and one figure (with figure legend) or table.',
                        '<b>Perspectives</b> discuss one or a cluster of recently published papers or a current research topic of high interest in which an author\'s perspective sheds an incisive light on key findings in research. These articles typically have one or two authors whose task is to inform our interdisciplinary readership about exciting scientific developments in the author\'s area of expertise. Other appropriate topics include discussions of methods, books, or meeting highlights. Perspectives are usually between 2000 and 4000 words total (including abstract, main text, references and figure legends). They should have a short pithy title, an abstract of 50 words or less, no more than 35 references, and 1 or 2 figures (with figure legends) or tables.',
                        '<b>Commentaries</b> (Word Limit 3000) present in-depth analysis of current issues such as policy, funding, regulatory, educational, and legislative issues, new institutes, careers etc. Commentaries should not exceed 3000 words total (including abstract, main text, references and figure legends). They should have a short pithy title, an abstract of 50 words or less, no more than 35 references, and one or two figures (with figure legends) or tables.',
                        '<b>Industry News</b> (Word Limit 250 – 400) short pieces that present new information about initiatives, products, services and developments in the field. These must not be promotional pieces about a product or service, and should make suitable reference to alternative systems, services, products or initiatives to place the update in context.'
                    ]
                    ?>
                    <ul class="list-disc ml-10 mt-5">

                        @foreach($articles as $article)
                            <li class="my-2 text-justify pl-3">
                                {!! $article !!}
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>

            <div class="py-2">
                <h1 class="text-2xl text-blue-800">Manuscript Preparation</h1>
                <h2 class="text-xl text-blue-700">General Considerations</h2>
                <div class="">
                    <p class="text-justify my-4">
                        Research manuscripts should comprise:
                    </p>
                    <?php $articles = [
                        '<b>Front matter:</b> Title, Author list, Affiliations, Abstract, Keywords',
                        '<b>Research manuscript sections:</b> Introduction, Materials and Methods, Results, Discussion, Conclusions',
                        '<b>Back matter:</b> Supplementary Materials, Acknowledgments, Author Contributions, Conflicts of Interest, References.'

                    ] ?>
                    <ul class="list-disc mt-5 ml-10">

                        @foreach($articles as $article)
                            <li class="my-2 text-justify pl-3">
                                {!! $article !!}
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>


            <div class="py-2">
                <h1 class="text-2xl text-blue-800">Front Matter</h1>
                <p class="text-justify my-3">These sections should appear in all manuscript types</p>
                <div>
                    <h2 class="text-xl text-blue-700">Title:</h2>
                    <?php $articles = [
                        'Should be concise, specific and relevant.',
                        'It should identify if the study reports (human or animal) trial data, or is a systematic review, meta-analysis or replication study.',
                        'When a gene or protein names are included, the abbreviated name rather than full name should be used.',
                        'Avoid abbreviations.',
                        'The usual limit for titles is 10 to 12 words (not counting “and,” “of,” and similar conjunctions and prepositions).',
                        'Avoid Redundant Phrases if possible (e.g. A Study of, A review of, A Survey of etc)'
                    ] ?>
                    <ul class="list-disc my-5 ml-10">

                        @foreach($articles as $article)
                            <li class="my-2 text-justify pl-3">
                                {!! $article !!}
                            </li>
                        @endforeach

                    </ul>
                </div>

                <div>
                    <h2 class="text-xl text-blue-700">Author List and Affiliations:</h2>
                    <?php
                    $aa = route('authorship');
                    $articles = [
                       'Authors\' full first and last name must be provided. The initials of any middle names can be added.',
                        'The format is used for affiliations: complete address information, including city, zip code, state/province, country, and all email addresses.',
                        'At least one author should be designated as the corresponding author, and his/her email address and other details should be included at the end of the affiliation section. Please read the <a href="http://theacepublications.test/authorship" class="text-blue-700 hover:underline">criteria to qualify for authorship</a>',
                    ] ?>
                    <ul class="list-disc my-5 ml-10">

                        @foreach($articles as $article)
                            <li class="my-2 text-justify pl-3">
                                {!! $article !!}
                            </li>
                        @endforeach

                    </ul>
                </div>

                <div>
                    <h2 class="text-xl text-blue-700">Digital Identifier</h2>

                    <p class="mt-1 mb-5">
                        We encourage authors to supply LiveDNA IDs during manuscript submission. Otherwise, we will request to the author to provide us most updated CV of the corresponding author to generate LiveDNA. Want to know more about LiveDNA? Visit the website of the LiveDNA.
                    </p>
                </div>

                <div>
                    <h2 class="text-xl text-blue-700">Abstract: </h2>

                    <p class="mt-1 mb-5">
                        The Abstract should be a total of about 250 words maximum.
                        The abstract should be a single paragraph and should follow the style of structured abstracts
                    </p>
                    <p class="mt-1 mb-5">
                        <b>Background & Objective:</b> Place the question addressed in a broad context and highlight the purpose of the study
                    </p>
                    <p class="mt-1 mb-5">
                        <b>Methods:</b> Describe briefly the main methods or treatments applied. Include any relevant preregistration numbers, and species and strains of any animals used
                    </p>
                    <p class="mt-1 mb-5">
                        <b>Results:</b> Summarize the article's main findings; and
                    </p>
                    <p class="mt-1 mb-5">
                        <b>Conclusion:</b> Indicate the main conclusions or interpretations.
                    </p>

                    <?php $articles = [
                        'Do not cite figures, tables, website or references.',
                        'Avoid equations.',
                        'Must not contain results which are not presented and substantiated in the main text',
                        'Should not exaggerate the main conclusions.'
                        ] ?>
                    <ul class="list-disc my-5 ml-10">

                        @foreach($articles as $article)
                            <li class="my-2 text-justify pl-3">
                                {!! $article !!}
                            </li>
                        @endforeach

                    </ul>
                </div>

                <div>
                    <h2 class="text-xl text-blue-700">Keywords:</h2>
                    <?php $articles = [
                        'Provide a maximum of 9 keywords',
                        'Be sparing with abbreviations: only abbreviations firmly established in the field may be eligible.',
                        'Avoid general and plural terms and multiple concepts (avoid, for example, "and", "of")'
                        ] ?>
                    <ul class="list-disc my-3 ml-10">

                        @foreach($articles as $article)
                            <li class="my-2 text-justify pl-3">
                                {!! $article !!}
                            </li>
                        @endforeach

                    </ul>
                </div>


                <div class="mt-5">
                    <h2 class="text-xl text-blue-700">Research Manuscript Sections</h2>
                   <p class="my-3 text-justify">
                       <b>Introduction:</b> The introduction should briefly place the study in a broad context and highlight why it is important. It should define the purpose of the work and its significance, including specific hypotheses being tested. The current state of the research field should be reviewed carefully and key publications cited. Please highlight controversial and diverging hypotheses when necessary. Finally, briefly mention the main aim of the work and highlight the main conclusions. Keep the introduction comprehensible to scientists working outside the topic of the paper.
                   </p>
                    <p class="my-3 text-justify">
                        <b>Materials and Methods:</b> In this section, authors should clearly mention when and where the study was conducted. They should be described in sufficient detail to allow others to replicate and build on published results. New methods and protocols should be described in detail while well-established methods can be briefly described and appropriately cited. Give the name and version of any software used and make clear whether computer code used is available. Include any pre-registration codes.
                   </p>
                    <p class="my-3 text-justify">
                        <b>Results:</b> Provide a concise and precise description of the experimental results, their interpretation as well as the experimental conclusions that can be drawn.
                   </p>
                    <p class="my-3 text-justify">
                        <b>Discussion:</b> Authors should discuss the results and how they can be interpreted in perspective of previous studies and of the working hypotheses. The findings and their implications should be discussed in the broadest context possible and limitations of the work highlighted. Future research directions may also be mentioned. This section may be combined with Results.
                   </p>
                    <p class="my-3 text-justify">
                        <b>Conclusions:</b> This section is not mandatory, but can be added to the manuscript if the discussion is unusually long or complex.
                   </p>
                    <p class="my-3 text-justify">
                        <b>Patents:</b> This section is not mandatory, but may be added if there are patents resulting from the work reported in this manuscript.
                   </p>
                </div>

                <div class="mt-5">
                    <h2 class="text-xl text-blue-700">Back Matter</h2>
                    <p class="mt-1 mb-3 text-justify">
                        <b>Supplementary Materials</b> Described any supplementary material published online alongside the manuscript (figure, tables, video, spreadsheets, etc.). Please indicate the name and title of each element as follows Figure S1: title, Table S1: title, etc.
                    </p>
                    <p class="my-3 text-justify">
                        <b>Acknowledgments</b> All sources of funding of the study should be disclosed. Clearly indicate grants that you have received in support of your research work and if you received funds to cover publication costs. Note that some funders will not refund article processing charges (APC) if the funder and grant number are not clearly and correctly identified in the paper.
                    </p>
                    <p class="my-3 text-justify">
                        <b>Author Contributions</b> Authorship should be limited to those who have made a significant contribution to the conception, design, execution, or interpretation of the reported study. Transparency about the contributions of authors is encouraged, for example in the form of a CRediT author statement.
                    </p>
                </div>

                <div class="mt-5">
                    <h2 class="text-xl text-blue-700">Credit author statement</h2>
                    <div class="mt-1 mb-3 text-justify">
                        <table class="table-auto border w-full">
                            <thead>
                            <tr class="bg-gray-800 text-white">
                                <th class="px-4 py-4">#</th>
                                <th class="px-4 py-4 tracking-wide font-thin text-lg">Terms</th>
                                <th class="px-4 py-4 tracking-wide font-thin text-lg">Definition</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $dataSets = [
                                    'Conceptualization' => 'Ideas; formulation or evolution of overarching research goals and aims',
                                    'Methodology' => 'Development or design of methodology; creation of models',
                                    'Software' => 'Programming, software development; designing computer programs; implementation of the computer code and supporting algorithms; testing of existing code components',
                                    'Validation' => 'Verification, whether as a part of the activity or separate, of the overall replication/ reproducibility of results/experiments and other research outputs',
                                    'Formal Analysis' => 'Application of statistical, mathematical, computational, or other formal techniques to analyze or synthesize study data',
                                    'Investigation' => 'Conducting a research and investigation process, specifically performing the experiments, or data/evidence collection',
                                    'Data Curation' => 'Management activities to annotate (produce metadata), scrub data and maintain research data (including software code, where it is necessary for interpreting the data itself) for initial use and later reuse',
                                    'Writing – Original Draft' => 'Preparation, creation and/or presentation of the published work, specifically writing the initial draft (including substantive translation)',
                                    'Writing – Review & Editing' => 'Preparation, creation and/or presentation of the published work by those from the original research group, specifically critical review, commentary or revision – including pre-or post publication stages',
                                    'Visualization' => 'Preparation, creation and/or presentation of the published work, specifically visualization/ data presentation',
                                    'Supervision' => 'Oversight and leadership responsibility for the research activity planning and execution, including mentorship external to the core team',
                                    'Project Administration' => 'Management and coordination responsibility for the research activity planning and execution',
                                    'Funding Acquisition' => 'Acquisition of the financial support for the project leading to this publication',

                                ];
                            ?>
                            @foreach($dataSets as $key=>$value)
                                <tr>
                                    <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                                    <td class="border px-4 py-2 w-56">
                                        {{ $key }}
                                    </td>
                                    <td class="border px-4 py-2">{{ $value }}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <div>* Reproduced from Brand et al. (2015), Learned Publishing 28(2), with permission of the authors.</div>

                        <p class="mt-4 mb-3 text-justify">CRediT offers authors the opportunity to share an accurate and detailed description of their diverse contributions to the published work.</p>

                        <?php $articles = [
                            'The corresponding author is responsible for ensuring that the descriptions are accurate and agreed by all authors.',
                            'The role(s) of all authors should be listed, using the relevant above categories. ',
                            'Authors may have contributed in multiple roles.',
                            'CRediT in no way changes the journal’s criteria to qualify for authorship.'

                        ] ?>
                        <ul class="list-disc my-5 ml-10">

                            @foreach($articles as $article)
                                <li class="my-2 text-justify pl-3">
                                    {!! $article !!}
                                </li>
                            @endforeach

                        </ul>
                        <p class="text-justify mt-2 mb-3">Author statements should be provided in a separate file during the submission process and will appear above the Acknowledgement section of the published paper as shown below.</p>

                    </div>

                </div>

                <div>
                    <h2 class="text-xl text-blue-700">CRediT author statement</h2>

                    <p class="mt-1 mb-5">
                        <b>Elizabeth Ash:</b> Conceptualization, Methodology, Software. <b>Catriona Fennell:</b> Data curation, Writing- Original draft preparation. <b>Linda Gruner:</b> Visualization, Investigation. <b>Ton Bos:</b> Supervision. <b>Ramya Kannan:</b> Software, Validation. <b>Kalaivani Moorthy:</b> Writing- Reviewing and Editing, Supervision. <b>Lucia Muñoz Franco:</b> Data curation, Software, Validation.
                    </p>
                </div>

                <div>
                    <h2 class="text-xl text-blue-700">More about CRediT</h2>

                    <p class="mt-1 mb-5">
                        CRediT (Contributor Roles Taxonomy) was introduced with the intention of recognizing individual author contributions, reducing authorship disputes and facilitating collaboration. The idea came about in 2015 at a Harvard workshop and it became a collaborative effort led by the Welcome Trust and Digital Science, with input from publishers.
                    </p>
                    <p>
                        <a href="#" class="text-blue-500 hover:underline">Beyond authorship: attribution, contribution, collaboration, and credit</a>
                    </p>
                    <p class="text-justify pt-4">
                        <b>Conflicts of Interest:</b> Authors must identify and declare any personal circumstances or interest that may be perceived as inappropriately influencing the representation or interpretation of reported research results. If there is no conflict of interest, please state "The authors declare no conflict of interest." Any role of the funding sponsors in the choice of research project; design of the study; in the collection, analyses or interpretation of data; in the writing of the manuscript; or in the decision to publish the results must be declared in this section. ACE Publications does not publish studies funded by the tobacco industry. Any projects funded by pharmaceutical or food industries must pay special attention to the full declaration of funder involvement. If there is no role, please state "The sponsors had no role in the design, execution, interpretation, or writing of the study".
                    </p>
                    <p class="text-justify pt-3">
                        <b>References:</b> References must be numbered in order of appearance in the text (including table captions and figure legends) and listed individually at the end of the manuscript. We recommend preparing the references with a bibliography software package, such as EndNote, Reference Manager or Zotero to avoid typing mistakes and duplicated references. We encourage citations to data, computer code and other citable research material. If available online, you may use reference style 9. below.
                    </p>
                    <p class="text-justify pt-2">
                        Citations and References in Supplementary files are permitted provided that they also appear in the main text and in the reference list.
                    </p>
                    <p class="text-justify pt-2">
                        In the text, reference numbers should be placed in square brackets [ ], and placed before the punctuation; for example [1], [1–3] or [1,3]. For embedded citations in the text with pagination, use both parentheses and brackets to indicate the reference number and page numbers; for example [5] (p. 10). or [6] (pp. 101–105).
                    </p>
                </div>

            </div>

            <div class="py-2">
                <h1 class="text-2xl text-blue-800">References should be described as follows, depending on the type of work:</h1>

                <div>
                    <h2 class="text-xl text-blue-700 mt-4">Journal Articles:</h2>
                    <div class="text-justify">
                        <?php
                        $articles = [
                           'Author 1, A.B.; Author 2, C.D., Year. Title of the article. Abbreviated Journal Name, Volume, page range. Available online: URL (accessed on Day Month Year). DOI:',
                            ];
                        ?>

                        <ol class="list-decimal my-3">

                            @foreach($articles as $article)
                                <li class="my-2 ml-10">
                                    {!! $article !!}
                                </li>
                            @endforeach

                        </ol>
                    </div>

                    <h2 class="text-xl text-blue-700 mt-2">Books and Book Chapters:</h2>
                    <div class="text-justify">
                        <?php
                        $articles = [
                                'Author 1, A.; Author 2, B. Book Title, 3rd ed.; Publisher: Publisher Location, Country, Year; pp. 154–196.',
                                'Author 1, A.; Author 2, B. Title of the chapter. In Book Title, 2nd ed.; Editor 1, A., Editor 2, B., Eds.; Publisher: Publisher Location, Country, Year; Volume 3, pp. 154–196.',
                            ];
                        ?>

                        <ol class="list-decimal my-3 ml-10">

                            @foreach($articles as $article)
                                <li class="my-2 text-justify pl-3">
                                    {!! $article !!}
                                </li>
                            @endforeach

                        </ol>
                    </div>

                    <h2 class="text-xl text-blue-700 mt-2">Unpublished work, submitted work, personal communication:</h2>
                    <div class="text-justify">
                        <?php
                        $articles = [
                            'Author 1, A.B.; Author 2, C. Title of Unpublished Work. status (unpublished; manuscript in preparation).',
                            'Author 1, A.B.; Author 2, C. Title of Unpublished Work. Abbreviated Journal Name stage of publication (under review; accepted; in press).',
                            'Author 1, A.B. (University, City, State, Country); Author 2, C. (Institute, City, State, Country). Personal communication, Year.',
                            ];
                        ?>
                        <ol class="list-decimal my-3 ml-10">
                            @foreach($articles as $article)
                                <li class="my-2 text-justify pl-3">
                                    {!! $article !!}
                                </li>
                            @endforeach
                        </ol>
                    </div>

                    <h2 class="text-xl text-blue-700 mt-2">Conference Proceedings:</h2>
                    <p class="text-justify">
                        Author 1, A.B.; Author 2, C.D.; Author 3, E.F. Title of Presentation. In Title of the Collected Work (if available), Proceedings of the Name of the Conference, Location of Conference, Country, Date of Conference; Editor 1, Editor 2, Eds. (if available); Publisher: City, Country, Year (if available); Abstract Number (optional), Pagination (optional).
                    </p>

                    <h2 class="text-xl text-blue-700 mt-2">Thesis:</h2>
                    <p class="text-justify">
                        Author 1, A.B. Title of Thesis. Level of Thesis, Degree-Granting University, Location of University, Date of Completion.
                    </p>

                    <h2 class="text-xl text-blue-700 mt-2">Websites:</h2>
                    <p class="text-justify">
                        Title of Site. Available online: URL (accessed on Day Month Year). Unlike published works, websites may change over time or disappear, so we encourage you to create an archive of the cited website using a service such as WebCite. Archived websites should be cited using the link provided as follows:
                    </p>

                    <p class="my-4">Title of Site. URL (archived on Day Month Year).</p>

                    <div class="text-justify">
                        <?php
                        $articles = [
                            'File for Figures and schemes must be provided during submission in a single zip archive and at a sufficiently high resolution (minimum 1000 pixels width/height, or a resolution of 300 dpi or higher). Common formats are accepted, however, TIFF, JPEG, EPS and PDF are preferred.',
                            'ACE Publications can publish multimedia files in the articles or as supplementary materials. Please contact the editorial office for further information.',
                            'All Figures, Schemes and Tables should be inserted into the main text close to their first citation and must be numbered following their number of appearances (Figure 1, Scheme I, Figure 2, Scheme II, Table 1, etc.).',
                            'All Figures, Schemes and Tables should have a short explanatory title and caption. All table columns should have an explanatory heading. To facilitate the copy-editing of the larger tables, smaller fonts may be used, but no less than 8 pt. in size. Authors should use the Table option of Microsoft Word to create tables.',
                            'Authors are encouraged to prepare figures and schemes in color (RGB at 8-bit per channel). There is no additional cost for publishing full color graphics.',
                            'Supplementary Materials, Data Deposit and Software Source Code',
                            ];
                        ?>
                        <ol class="list-disc my-3 ml-10">
                            @foreach($articles as $article)
                                <li class="my-2 text-justify pl-3">
                                    {!! $article !!}
                                </li>
                            @endforeach
                        </ol>
                    </div>

                    <h2 class="text-xl text-blue-700 mt-2">Data Availability:</h2>
                    <p class="text-justify">
                        In order to maintain the integrity, transparency and reproducibility of research records, the authors must make their experimental and research data openly available either by depositing into data repositories or by publishing the data and files as supplementary information in this journal.
                    </p>

                    <h2 class="text-xl text-blue-700 mt-2">Computer Code and Software:</h2>
                    <p class="text-justify">
                        For work where novel computer code was developed, authors should release the code either by depositing in a recognized, public repository or uploading as supplementary information to the publication. The name and version of all software used should be clearly indicated.
                    </p>

                    <h2 class="text-xl text-blue-700 mt-2">Supplementary Material:</h2>
                    <p class="text-justify">
                        Additional data and files can be uploaded as "Supplementary Files" during the manuscript submission process. The supplementary files will also be available to the referees as part of the peer-review process. Any file format is acceptable; however, we recommend that common, non-proprietary formats are used where possible.
                    </p>

                    <h2 class="text-xl text-blue-700 mt-2">Unpublished Data:</h2>
                    <p class="text-justify">
                        Restrictions on data availability should be noted during submission and in the manuscript. "Data not shown" should be avoided: authors are encouraged to publish all observations related to the submitted manuscript as Supplementary Material. "Unpublished data" intended for publication in a manuscript that is either planned, "in preparation" or "submitted" but not yet accepted, should be cited in the text and a reference should be added in the References section. "Personal Communication" should also be cited in the text and reference added in the References section.
                    </p>

                    <h2 class="text-xl text-blue-700 mt-2">Remote Hosting and Large Data Sets:</h2>
                    <p class="text-justify">
                        Data may be deposited with specialized service providers or institutional/subject repositories, preferably those that use the DataCite mechanism. Large data sets and files greater than 60 MB must be deposited in this way. For a list of other repositories specialized in scientific and experimental data, please consult databib.org or re3data.org. The data repository name, link to the data set (URL) and accession number, DOI or handle number of the data set must be provided in the paper. The journal Data also accepts submissions of data set papers.
                    </p>

                    <h2 class="text-xl text-blue-700 mt-2">Deposition of Sequences and of Expression Data:</h2>
                    <p class="text-justify">
                        New sequence information must be deposited to the appropriate database prior to submission of the manuscript. Accession numbers provided by the database should be included in the submitted manuscript. Manuscripts will not be published until the accession number is provided.
                    </p>

                    <div class="text-justify">
                        <?php
                        $articles = [
                           'New nucleic acid sequences must be deposited in one of the following databases: GenBank, EMBL, or DDBJ. Sequences should be submitted to only one database.',
                           'New high throughput sequencing (HTS) data sets (RNA-seq, ChIP-Seq, degradome analysis, …) must be deposited either in the GEO database or in the NCBI\'s Sequence Read Archive.',
                           'New micro array data must be deposited either in the GEO or the ArrayExpress databases. The "Minimal Information About a Microarray Experiment" (MIAME) guidelines published by the Microarray Gene Expression Data Society must be followed.',
                           'New protein sequences obtained by protein sequencing must be submitted to UniProt (submission tool SPIN).',
                        ];
                        ?>
                        <ol class="list-disc my-3 ml-10">
                            @foreach($articles as $article)
                                <li class="my-2 text-justify pl-3">
                                    {!! $article !!}
                                </li>
                            @endforeach
                        </ol>
                    </div>

                    <p class="text-justify">
                        NAll sequence names and the accession numbers provided by the databases should be provided in the Materials and Methods section of the article.
                    </p>

                    <h2 class="text-xl text-blue-700 mt-2">References in Supplementary Files</h2>
                    <p class="text-justify">
                        Citations and References in Supplementary files are permitted provided that they also appear in the reference list of the main text.
                    </p>
                </div>
            </div>

        </div>
    </div>
@endsection
