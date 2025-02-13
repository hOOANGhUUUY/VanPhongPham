<?php
class CategoryService
{
    private $categoryModel;

    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
    }

    public function grCate()
    {
        $data = $this->categoryModel->getAllCate();
        $result = [];
        foreach ($data as $row) {
            $cateId = $row['category_id'];
            $overallId = $row['overall_id'];
            $specificId = $row['specific_id'];

            if (!isset($result[$cateId])) {
                $result[$cateId] = [
                    'id' => $cateId,
                    'name' => $row['category_name'],
                    'status' => $row['category_status'],
                    'overall_fields' => []
                ];
            }

            // Nếu lĩnh vực chung tồn tại, kiểm tra trùng lặp
            if ($overallId && !isset($result[$cateId]['overall_fields'][$overallId])) {
                $result[$cateId]['overall_fields'][$overallId] = [
                    'id' => $overallId,
                    'name' => $row['overall_name'],
                    'specific_genres' => []
                ];
            }
            // Nếu thể loại chi tiết tồn tại, kiểm tra trùng lặp
            if ($specificId && !isset($result[$cateId]['overall_fields'][$overallId]['specific_genres'][$specificId])) {
                $result[$cateId]['overall_fields'][$overallId]['specific_genres'][$specificId] = [
                    'id' => $specificId,
                    'name' => $row['specific_name']
                ];
            }
        }

        // Chuyển dữ liệu về dạng mảng chuẩn
        foreach ($result as &$category) {
            $category['overall_fields'] = array_values($category['overall_fields']);
            foreach ($category['overall_fields'] as &$overall) {
                $overall['specific_genres'] = array_values($overall['specific_genres']);
            }
        }
        return array_values($result);

        // dữ liệu mẫu 
        // [
        //     {
        //         "id": 1,
        //         "name": "Văn phòng",
        //         "status": 1,
        //         "overall_fields": [
        //             {
        //                 "id": 10,
        //                 "name": "Đồ dùng học tập",
        //                 "specific_genres": [
        //                     {
        //                         "id": 100,
        //                         "name": "Bút viết"
        //                     },
        //                     {
        //                         "id": 101,
        //                         "name": "Sổ tay"
        //                     }
        //                 ]
        //             }
        //         ]
        //     },
        //     {
        //         "id": 2,
        //         "name": "Nghệ thuật",
        //         "status": 1,
        //         "overall_fields": [
        //             {
        //                 "id": 11,
        //                 "name": "Dụng cụ vẽ",
        //                 "specific_genres": [
        //                     {
        //                         "id": 102,
        //                         "name": "Cọ vẽ"
        //                     },
        //                     {
        //                         "id": 103,
        //                         "name": "Màu nước"
        //                     }
        //                 ]
        //             }
        //         ]
        //     }
        // ]
        
    }
}
