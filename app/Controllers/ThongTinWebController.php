<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ThongTinWebController extends BaseController
{
    public function __construct()
    {
    }

    public function index()
    {
        $dtJson = $this->docthongtinweb();
        
        // Kiểm tra và gán dữ liệu vào mảng $data
        $data['Chu_chay'] = !empty($dtJson['pageHeading']) ? $dtJson['pageHeading'] : '';
        $data['logo'] = !empty($dtJson['logo']) ? $dtJson['logo'] : '';
        $data['slogan'] = !empty($dtJson['slogan']) ? $dtJson['slogan'] : '';
        $data['address'] = !empty($dtJson['address']) ? $dtJson['address'] : '';
        $data['phoneNumber'] = !empty($dtJson['phoneNumber']) ? $dtJson['phoneNumber'] : '';
        $data['email'] = !empty($dtJson['email']) ? $dtJson['email'] : '';
        $data['faxNumber'] = !empty($dtJson['faxNumber']) ? $dtJson['faxNumber'] : '';
        $data['facebook'] = !empty($dtJson['facebook']) ? $dtJson['facebook'] : '';
        $data['map'] = !empty($dtJson['map']) ? $dtJson['map'] : '';
        $data['responsiblePerson'] = !empty($dtJson['responsiblePerson']) ? $dtJson['responsiblePerson'] : '';
        $data['banLienKet'] = !empty($dtJson['tableData']) ? $this->convertJsonToArray($dtJson['tableData']) : [];

        $data['showTVAnh'] = !empty($dtJson['showTVAnh']) ? $dtJson['showTVAnh'] : false;
        $data['showTVVideo'] = !empty($dtJson['showTVVideo']) ? $dtJson['showTVVideo'] : false;
        $data['showThuGopY'] = !empty($dtJson['showThuGopY']) ? $dtJson['showThuGopY'] : false;

        $data['checkQuyen'] = $this->check_nhom_quyen('nhomQ6649c4b2badea3.52812977');
        return $this->template_admin(view("admin/cauhinhthongtinweb/thongtinweb", $data));
    }

    public function luuthongtinweb()
    {
        helper('filesystem');
        $dtJson = $this->docthongtinweb();
        $formData = [];

        // Handle file upload
        $logoFile = $this->request->getFile('logo_img');
        if ($logoFile && $logoFile->isValid()) {
            $logoFileOld = isset($dtJson['logo']) ? $dtJson['logo'] : null;
            if (!empty($logoFileOld) && file_exists(ROOTPATH . 'public/upload/media/images/' . $logoFileOld)) {
                unlink(ROOTPATH . 'public/upload/media/images/' . $logoFileOld);
            }
            $newLogoName = $logoFile->getRandomName();
            $logoFile->move(ROOTPATH . 'public/upload/media/images', $newLogoName);
            $formData['logo'] = $newLogoName;
        } else {
            $formData['logo'] = $dtJson['logo'];
        }

        // Collect form data
        $formData['pageHeading'] = $this->request->getPost('pageHeading');
        $formData['slogan'] = $this->request->getPost('slogan');
        $formData['address'] = $this->request->getPost('address');
        $formData['phoneNumber'] = $this->request->getPost('phoneNumber');
        $formData['email'] = $this->request->getPost('email');
        $formData['faxNumber'] = $this->request->getPost('faxNumber');
        $formData['facebook'] = $this->request->getPost('facebook');
        $formData['map'] = $this->request->getPost('map');
        $formData['responsiblePerson'] = $this->request->getPost('responsiblePerson');
        $formData['tableData'] = $this->request->getPost('tableData');

        $formData['showTVAnh'] = $this->request->getPost('showTVAnh') ? true : false;
        $formData['showTVVideo'] = $this->request->getPost('showTVVideo') ? true : false;
        $formData['showThuGopY'] = $this->request->getPost('showThuGopY') ? true : false;

        // Encode form data to JSON
        $jsonData = json_encode($formData);

        // Write JSON data to file
        $filePath = WRITEPATH . 'data/form_data.json';
        if (write_file($filePath, $jsonData)) {
            return redirect()->to('/admin/thongtinweb')->with('success', 'Cập nhật thông tin thành công');
        } else {
            return redirect()->to('/admin/thongtinweb')->with('error', 'Failed to write data!');
        }
    }

public function updateFormData()
{
    helper('filesystem');
    $filePath = WRITEPATH . 'data/form_data.json';

    // Read existing data
    if (file_exists($filePath)) {
        $jsonData = file_get_contents($filePath);
        $data = json_decode($jsonData, true);
    } else {
        $data = [];
    }

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

    // Encode data to JSON
    $jsonData = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

    // Write updated data back to the file
    if (write_file($filePath, $jsonData)) {
        return redirect()->to('/admin/thongtinweb')->with('success', 'Cập nhật thông tin thành công');
    } else {
        return redirect()->to('/admin/thongtinweb')->with('error', 'Failed to write data!');
    }
}
}