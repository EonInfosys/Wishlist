<?php
namespace EonInfosys\Wishlist\Api;

/**
 * Interface WishlistManagementInterface
 * @api
 */
interface WishlistManagementInterface
{

    /**
     * Return Wishlist items.
     *
     * @param int $customerId
     * @return int[]
     */
    public function getWishlistForCustomer($customerId);

    /**
     * Return Added wishlist item.
     *
     * @param int $customerId
     * @param int $productId
     * @return bool
     *
     */
    public function addWishlistForCustomer($customerId,$productId);


    /**
     * Return Added wishlist item.
     *
     * @param int $customerId
     * @param string $productSku
     * @return bool
     *
     */
    public function addWishlistForCustomerBySku($customerId,$productSku);


    /**
     * Return Added wishlist item.
     *
     * @param int $customerId
     * @param int $wishlistId
     * @return bool
     *
     */
    public function deleteWishlistForCustomer($customerId,$wishlistItemId);

    /**
     * Return Added wishlist info.
     *
     * @param int $customerId
     * @return int[]
     *
     */
    public function getWishlistInfo($customerId);

}
