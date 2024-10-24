<?php

namespace App\Controllers;

use App\Models\PanelModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Models\UserModel;
use App\Models\ChuyenMucModels;
use App\Models\ThuGopYModel;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;
    protected $UserModel, $ChuyenMucModels, $PanelModel, $ThuGopYModel;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var list<string>
     */
    protected $helpers = [];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.
        $this->UserModel = new UserModel();
        $this->ChuyenMucModels = new ChuyenMucModels();
        $this->PanelModel = new PanelModel();
        $this->ThuGopYModel = new ThuGopYModel();
        // E.g.: $this->session = \Config\Services::session();
    }

    public function demTruyCap()
    {
        $session = session();

        if (!$session->has('truy_cap_da_dem')) {
            $dt = date('Y-m-d');
            $this->UserModel->dem_truy_cao($dt);
            $session->set('truy_cap_da_dem', true);
            $session->set('last_visit_time', time());
        } else {
            $last_visit_time = $session->get('last_visit_time');
            $current_time = time();

            if ($current_time - $last_visit_time > 1800) {
                $dt = date('Y-m-d');
                $this->UserModel->dem_truy_cao($dt);
                $session->set('last_visit_time', $current_time);
            }
        }
    }

    public function template($page, $data = null, $template_style = 'v1')
    {
        // Lấy dữ liệu cần thiết
        $categoryTree = $this->getCategoryTree();
        $dataPanel = $this->PanelModel->lay_ds_panel_canh_ben();

        // Khởi tạo dữ liệu template
        $data_template['page'] = $page;
        $data_template['ds_category'] = $categoryTree;
        $data_template['dataPanel'] = $dataPanel;

        // Lấy URL hiện tại
        $request = service('request');
        $url = $request->getUri()->getPath();
        $uriSegments = $request->getUri()->getSegments();

        $breadcrumbs = [];
        if (count($uriSegments) == 1) {
            switch ($uriSegments[0]) {
                case "tailieu_vanban":
                    $breadcrumbs[] = ['title' => "Trang chủ", 'url' => '/'];
                    $breadcrumbs[] = ['title' => "Tài liệu - Văn bản", 'url' => '/tailieu_vanban'];
                    break;
                case "gop-y":
                    $breadcrumbs[] = ['title' => "Trang chủ", 'url' => '/'];
                    $breadcrumbs[] = ['title' => "Góp ý", 'url' => '/gop-y'];
                    break;
                case "thu-vien-anh":
                    $breadcrumbs[] = ['title' => "Trang chủ", 'url' => '/'];
                    $breadcrumbs[] = ['title' => "Thư viện ảnh", 'url' => '/thu-vien-anh'];
                    break;
                case "thu-vien-video":
                    $breadcrumbs[] = ['title' => "Trang chủ", 'url' => '/'];
                    $breadcrumbs[] = ['title' => "Thư viện video", 'url' => '/thu-vien-video'];
                    break;
                case "sitemap":
                    $breadcrumbs[] = ['title' => "Trang chủ", 'url' => '/'];
                    $breadcrumbs[] = ['title' => "Sơ đồ trang", 'url' => '/sitemap'];
                    break;
            }
        } else {
            foreach ($uriSegments as $segment) {
                $title = $this->ChuyenMucModels->lay_ten_chuyen_muc_url($segment);
                $url .= '/' . $segment;
                $breadcrumbs[] = ['title' => $title, 'url' => $url];
            }
            $breadcrumbs[0] = ['title' => 'Trang chủ', 'url' => base_url()];
            foreach ($breadcrumbs as &$breadcrumb) {
                if ($breadcrumb['title'] == 'cate') $breadcrumb['title'] = 'Bài viết';
            }
        }

        $data_template['breadcrumb'] = $breadcrumbs;

        $this->demTruyCap();

        // lấy truy cập ngày
        $ls_TruyCapNgay = $this->UserModel->lay_sl_truy_cap_ngay_now();
        $ls_TruyCapThang = $this->UserModel->lay_sl_truy_cap_thang_now();
        $ls_TruyCapNam = $this->UserModel->lay_sl_truy_cap_nam_now();
        $ls_TruyCapToanBo = $this->UserModel->lay_sl_truy_cap_tong();

        $demThoiGian = [
            "sl_tc_ngay" => $ls_TruyCapNgay,
            "sl_tc_thang" => $ls_TruyCapThang,
            "sl_tc_nam" => $ls_TruyCapNam,
            "sl_tc_tong" => $ls_TruyCapToanBo
        ];

        $data_template["luoc_truy_cap"] = $demThoiGian;

        $dtJson = $this->docthongtinweb();
        $data_template['Chu_chay'] = !empty($dtJson['pageHeading']) ? $dtJson['pageHeading'] : '';
        $data_template['logo'] = !empty($dtJson['logo']) ? $dtJson['logo'] : '';
        $data_template['slogan'] = !empty($dtJson['slogan']) ? $dtJson['slogan'] : '';
        $data_template['address'] = !empty($dtJson['address']) ? $dtJson['address'] : '';
        $data_template['phoneNumber'] = !empty($dtJson['phoneNumber']) ? $dtJson['phoneNumber'] : '';
        $data_template['email'] = !empty($dtJson['email']) ? $dtJson['email'] : '';
        $data_template['faxNumber'] = !empty($dtJson['faxNumber']) ? $dtJson['faxNumber'] : '';
        $data_template['facebook'] = !empty($dtJson['facebook']) ? $dtJson['facebook'] : '';
        $data_template['map'] = !empty($dtJson['map']) ? $dtJson['map'] : '';
        $data_template['responsiblePerson'] = !empty($dtJson['responsiblePerson']) ? $dtJson['responsiblePerson'] : '';
        $data_template['banLienKet'] = !empty($dtJson['tableData']) ? $this->convertJsonToArray($dtJson['tableData']) : [];
        $data_template['showTVAnh'] = !empty($dtJson['showTVAnh']) ? $dtJson['showTVAnh'] : false;
        $data_template['showTVVideo'] = !empty($dtJson['showTVVideo']) ? $dtJson['showTVVideo'] : false;
        $data_template['showThuGopY'] = !empty($dtJson['showThuGopY']) ? $dtJson['showThuGopY'] : false;

        $ds_thu_gop_y = $this->ThuGopYModel->lay_thu_da_phan_hoi();
        $data_template['ds_thu_gop_y'] = $ds_thu_gop_y;

        if (isset($page)) {
            return view($template_style == 'v2' ? "templates/Layout_v2" : "templates/Layout", $data_template);
        } else {
            return view("Page_404");
        }
    }

    public function check_nhom_quyen($maNhom)
    {
        $session = session();
        $username = $session->get('username');
        $maNguoiDung = $this->UserModel->lay_ma_user_qua_tenDN($username);
        return $this->UserModel->check_nguoi_dung_co_nhom_quyen($maNguoiDung, $maNhom);
    }

    public function docthongtinweb()
    {
        helper('filesystem');
        $filePath = WRITEPATH . 'data/form_data.json';
        if (file_exists($filePath)) {
            $jsonData = file_get_contents($filePath);
            $data = json_decode($jsonData, true);

            // Update data
            $data['pageHeading'] = 'TRUNG TÂM CÔNG NGHỆ THÔNG TIN & TRUYỀN THÔNG';
            $data['slogan'] = 'Leading the Way in IT & Communication';
            $data['address'] = '123 IT Street, Tech City';
            $data['phoneNumber'] = '123-456-7890';
            $data['email'] = 'info@techcenter.com';
            $data['faxNumber'] = '123-456-7891';
            $data['facebook'] = 'https://facebook.com/techcenter';
            $data['map'] = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.898165919149!2d105.77120457586362!3d10.02526177259789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a08824517ba9c7%3A0xd72ef59531ace72a!2zSOG7mWkgbGnDqm4gaGnhu4dwIFBo4bulIG7hu68gVFAgQ-G6p24gVGjGoQ!5e0!3m2!1svi!2s!4v1715005299549!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
            $data['responsiblePerson'] = 'John Doe - Director of IT Center';

            return $data;
        }
        return [];
    }
    public function template_admin($page, $data = null)
    {
        $session = session();
        if ($session->has('username')) {
            $username = $session->get('username');
            $infoUser = $this->UserModel->layDuLieuCaNhan($username);
            $maNguoiDung = $this->UserModel->lay_ma_user_qua_tenDN($username);
            $danhSachChucNang = $this->UserModel->lay_danh_sach_quyen_maNguoiDung($maNguoiDung);

            $data_template['danhSachChucNang'] = $danhSachChucNang;
            $data_template['page'] = $page;
            $data_template['data'] = $data ?? $infoUser;

            $dtJson = $this->docthongtinweb();
            $data_template['logo'] = !empty($dtJson['logo']) ? $dtJson['logo'] : '';

            return view("admin_template/layout", $data_template);
        } else {
            return view("Page_Login");
        }
    }

    function convertJsonToArray($jsonString)
    {
        if (empty($jsonString)) {
            return [];
        }

        $jsonString = str_replace(["\r", "\n", "\t"], '', $jsonString);
        $jsonString = trim($jsonString, '[]');
        $keyValuePairs = explode(',', $jsonString);

        $resultArray = [];
        foreach ($keyValuePairs as $pair) {
            list($key, $value) = explode(':', $pair, 2);
            $key = trim($key, '"');
            $value = trim($value, '"');
            $resultArray[$key] = $value;
        }

        return $resultArray;
    }

    public function check_co_trong_chuoi($doiTuongCheck, $chuoiCheck)
    {
        return strpos($chuoiCheck, $doiTuongCheck) !== false;
    }

    public function show_menu_chuyen_muc()
    {
        return $this->getCategoryTree();
    }

    public function getCategoryTree()
    {
        $result = $this->ChuyenMucModels->getList_chuyen_muc_cha();
        $categories = [];

        if (!empty($result)) {
            foreach ($result as $row) {
                $category = [
                    'maChuyenMuc' => $row['maChuyenMuc'],
                    'tenChuyenMuc' => $row['tenChuyenMuc'],
                    'urlChuenMuc' => $row['urlChuenMuc'],
                    'subcategories' => $this->getSubcategories($row['maChuyenMuc'])
                ];
                array_push($categories, $category);
            }
        }

        return $categories;
    }

    public function getSubcategories($parentCategory)
    {
        $subcategories = [];
        $result = $this->ChuyenMucModels->getList_chuyen_muc_con($parentCategory);
        if (!empty($result)) {
            foreach ($result as $row) {
                $subcategory = [
                    'maChuyenMuc' => $row['maChuyenMuc'],
                    'tenChuyenMuc' => $row['tenChuyenMuc'],
                    'urlChuenMuc' => $row['urlChuenMuc'],
                    'maChuyenMucCha' => $row['maChuyenMucCha'],
                    'subcategories' => $this->getSubcategories($row['maChuyenMuc'])
                ];
                array_push($subcategories, $subcategory);
            }
        }

        return $subcategories;
    }

    public function show_file_anh($filename)
    {
        $imagePath = ROOTPATH . 'public/upload/media/images/' . $filename;
        if (is_file($imagePath)) {
            return $this->response->download($imagePath, null)->setFileName($filename);
        } else {
            return $this->response->setStatusCode(404)->setBody('File not found');
        }
    }

    public function show_file_videos($filename)
    {
        $imagePath = ROOTPATH . 'public/upload/media/videos/' . $filename;
        if (is_file($imagePath)) {
            return $this->response->download($imagePath, null)->setFileName($filename);
        } else {
            return $this->response->setStatusCode(404)->setBody('File not found');
        }
    }

    public function show_file_document($filename)
    {
        $imagePath = ROOTPATH . 'public/upload/document/' . $filename;
        if (is_file($imagePath)) {
            return $this->response->download($imagePath, null)->setFileName($filename);
        } else {
            return $this->response->setStatusCode(404)->setBody('File not found');
        }
    }

    public function khongdau($str = null)
    {
        $str = preg_replace("/ /", '-', $str);
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
        $str = preg_replace("/(đ)/", 'd', $str);
        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
        $str = preg_replace("/(Đ)/", 'D', $str);
        return $str;
    }

    function loc_duong_dan($url)
    {
        if (empty($url)) {
            return "";
        }
        $parsed_url = parse_url($url);
        return $parsed_url['path'] ?? '/';
    }
}