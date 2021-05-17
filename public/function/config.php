<?php

$ui = (isset($_GET['page']) && $_GET['page'] != '')? $_GET['page'] :'';
	switch ($ui)
	{
         case 'entrance';
		$ui_page="pages/entrance.php";
		break;
		
        case 'syllabus';
		$ui_page="pages/syllabus.php";
		break;

        case 'universityactivities';
		$ui_page="pages/universityactivities.php";
		break;
		
		case 'centralbuilding';
		$ui_page="pages/centralbuilding.php";
		break;
		
		case 'sima';
		$ui_page="pages/sima.php";
		break;
		
		case 'strp';
		$ui_page="pages/strp.php";
		break;
		
		case 'contactus';
		$ui_page="pages/contactus.php";
		break;
		
		case 'feedback';
		$ui_page="pages/feedback.php";
		break;

		case 'multimediam3detail';
		$ui_page="pages/multimediam3detail.php";
		break;

		case 'multimedialist3';
		$ui_page="pages/multimedialist3.php";
		break;
		
		case 'multimediam4detail';
		$ui_page="pages/multimediam4detail.php";
		break;

		case 'multimedialist4';
		$ui_page="pages/multimedialist4.php";
		break;
		
		case 'detailnews';
		$ui_page="pages/detailnews.php";
		break;
		
		case 'faq';
		$ui_page="pages/faq.php";
		break;
		
		case 'phdgraduatecourse';
		$ui_page="pages/phdgraduatecourse.php";
		break;
		
		case 'magraduatecourse1';
		$ui_page="pages/magraduatecourse.php";
		break;

		case 'magraduatecourse2';
		$ui_page="pages/magraduatecourse2.php";
		break;
		
		case 'graduatecoursea';
		$ui_page="pages/graduatecourse.php";
		break;

		case 'graduatecourseb';
		$ui_page="pages/graduatecourseb.php";
		break;
		
		case 'diplomacourse';
		$ui_page="pages/diplomacourse.php";
		break;
		
		case 'meditationcenter';
		$ui_page="pages/meditationcenter.php";
		break;
		
		case 'medicalfacilities';
		$ui_page="pages/medicalfacilities.php";
		break;
		
		case 'hostels';
		$ui_page="pages/hostels.php";
		break;
		
		case 'library';
		$ui_page="pages/library.php";
		break;
		
		case 'booklist';
		$ui_page="pages/booklist.php";
		break;
		
		case 'photogallery';
		$ui_page="pages/gallery.php";
		break;
		
		case 'multimedia';
		$ui_page="pages/multimedia.php";
		break;
		
		case 'detailmagazine';
		$ui_page="pages/detailmagazine.php";
		break;

		case 'magazine';
		$ui_page="pages/magazine.php";
		break;
		
		case 'news';
		$ui_page="pages/news.php";
		break;
		
		case 'courseyeartimetable';
		$ui_page="pages/courseyeartimetable.php";
		break;
		
		case 'coursetimetabledetail';
		$ui_page="pages/coursetimetabledetail.php";
		break;
		
		case 'applicationform';
		$ui_page="pages/applicationform.php";
		break;
		
		case 'entranceform';
		$ui_page="pages/entranceform.php";
		break;

		case 'desorganization';
		$ui_page="pages/desorganization.php";
		break;
		
		case 'organization';
		$ui_page="pages/organization.php";
		break;

		case 'mottos';
		$ui_page="pages/mottos.php";
		break;

		case 'courseyear';
		$ui_page="pages/courseyear.php";
		break;

		case 'faculties';
		$ui_page="pages/faculties.php";
		break;

		case 'faculties_dept';
		$ui_page="pages/faculties_dept.php";
		break;

		case 'setup';
		$ui_page="pages/setup.php";
		break;
		
		case 'goldlist';
		$ui_page="pages/goldlist.php";
		break;
		
		case 'phdholderlist';
		$ui_page="pages/phdholderlist.php";
		break;
		
		case 'view';
		$ui_page="pages/view.php";
		break;
		
		case 'magazine_view';
		$ui_page="pages/magazine_view.php";
		break;
		
		case 'news_view';
		$ui_page="pages/news_view.php";
		break;
		
		case 'faculties_view';
		$ui_page="pages/faculties_view.php";
		break;
		
		case 'mottos_view';
		$ui_page="pages/mottos_view.php";
		break;
		
		case 'organization_view';
		$ui_page="pages/organization_view.php";
		break;
		
		case 'secure_magazine';
		$ui_page="pages/secure_magazine.php";
		break;
		
		case 'view_video';
		$ui_page="pages/view_video.php";
		break;
		
		case 'gallery_view';
		$ui_page="pages/gallery_view.php";
		break;
		
		case 'diploma_view';
		$ui_page="pages/diploma_view.php";
		break;
		
		case 'library_view';
		$ui_page="pages/library_view.php";
		break;

		default:
		$ui_page="pages/index.php";
		break;
	}
?>
