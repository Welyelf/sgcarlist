<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once FCPATH . '/vendor/autoload.php';

if ( ! function_exists('S3_upload_image')) {
    function S3_upload_image($file_obj, $target_file, $folder_prefix = 'images')
    {
        //get CI instance and load s3 config
        $CI =& get_instance();
        $CI->config->load('s3');

        //initial api output
        $data['success'] = FALSE;
        $data['message'] = '';
        $can_upload = FALSE;

        //check request parameters
        if ($file_obj['name']) {
            //if (!isset($file_obj['error'])) {
            $file_size = getimagesize($file_obj['tmp_name']);
            if ($file_size !== FALSE) {
                $full_file_name = $file_obj['name'];
                $file_ext = strtolower(pathinfo($full_file_name, PATHINFO_EXTENSION));
                if (in_array($file_ext, array('jpg', 'png', 'jpeg', 'gif', 'svg'))) {
                    if (isset($target_file)) {
                        $can_upload = TRUE;
                    } else {
                        $data['message'] = 'Specify a destination file';
                    }
                } else {
                    $data['message'] = 'Only image files allowed';
                }
            } else {
                $data['message'] = 'Image file is not valid';
            }
        } else {
            $data['message'] = 'Select at least one image file to upload';
        }

        if ($can_upload === TRUE) {
            $s3credentials = new Aws\Credentials\Credentials($CI->config->item('S3_Access_Key'), $CI->config->item('S3_Secret_Key'));
            $s3Client = new Aws\S3\S3Client([
                'version' => 'latest',
                'region' => 'us-east-1',
                'credentials' => $s3credentials
            ]);

            //attempt the actual S3 upload
            try {
                $file_zipped = $file_obj['tmp_name'];
                $file_contents = fopen($file_zipped, 'r');

                $result = $s3Client->putObject([
                    'Bucket' => $CI->config->item('S3_Bucket'),
                    'Key' => $folder_prefix . '/' . $target_file,
                    'Body' => $file_contents,
                    'ACL' => 'public-read',
                ]);
                $data['success'] = TRUE;
                $data['url'] = $CI->config->item('S3_Base_URL') . '/' . $folder_prefix . '/' . $target_file;
                $data['contents'] = $file_contents;
                $data['message'] = 'Image file uploaded';
            } catch (Aws\S3\Exception\S3Exception $e) {
                $data['success'] = FALSE;
                $data['message'] = $e->getMessage();
            }
        }

        //Set response header to json and dump json output
        return $data;

    }
}
