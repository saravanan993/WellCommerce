<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */
namespace WellCommerce\AppBundle\Repository;

use WellCommerce\AppBundle\Repository\AbstractEntityRepository;

/**
 * Class ProductReviewRepository
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class ProductReviewRepository extends AbstractEntityRepository implements ProductReviewRepositoryInterface
{
    public function getDataSetQueryBuilder()
    {
        $queryBuilder = $this->getQueryBuilder();
        $queryBuilder->groupBy('product_review.id');
        $queryBuilder->leftJoin('product_review.product', 'product_info');
        $queryBuilder->leftJoin('product_info.translations', 'product_translation');

        return $queryBuilder;
    }
}