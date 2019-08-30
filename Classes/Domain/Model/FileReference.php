<?php

namespace SourceBroker\T3apinews\Domain\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class FileReference
 */
class FileReference extends \GeorgRinger\News\Domain\Model\FileReference
{

    /**
     * @var string
     * @Serializer\Groups({
     *     "api_get_collection_t3apinews_news",
     *     "api_get_item_t3apinews_news",
     * })
     */
    protected $title;

    /**
     * @var string
     * @Serializer\Groups({
     *     "api_get_item_t3apinews_news",
     * })
     */
    protected $description;

    /**
     * @var string
     * @Serializer\Groups({
     *     "api_get_collection_t3apinews_news",
     *     "api_get_item_t3apinews_news",
     * })
     */
    protected $alternative;

    /**
     * @var string
     * @Serializer\Groups({
     *     "api_get_collection_t3apinews_news",
     *     "api_get_item_t3apinews_news",
     * })
     * @Serializer\Type("Typolink")
     */
    protected $link;

    /**
     * @var int
     * @Serializer\Groups({
     *     "api_get_collection_t3apinews_news",
     *     "api_get_item_t3apinews_news",
     * })
     */
    protected $showinpreview = 0;

    /**
     * @Serializer\VirtualProperty()
     * @Serializer\Groups({
     *     "api_get_collection_t3apinews_news",
     *     "api_get_item_t3apinews_news",
     * })
     * @Serializer\Type("ProcessedImage<'380', '250c'>")
     */
    public function getImageThumbnail(): int
    {
        return $this->uid;
    }

    /**
     * @Serializer\VirtualProperty()
     * @Serializer\Groups({
     *     "api_get_collection_t3apinews_news",
     *     "api_get_item_t3apinews_news",
     * })
     * @Serializer\Type("ProcessedImage")
     */
    public function getImageOriginal(): int
    {
        return $this->uid;
    }

}