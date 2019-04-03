<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/photos/library/v1/photos_library.proto

namespace Google\Photos\Library\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * List of media items that match the search parameters.
 *
 * Generated from protobuf message <code>google.photos.library.v1.SearchMediaItemsResponse</code>
 */
class SearchMediaItemsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output only] List of media items that match the search parameters.
     *
     * Generated from protobuf field <code>repeated .google.photos.types.MediaItem media_items = 1;</code>
     */
    private $media_items;
    /**
     * [Output only] Use this token to get the next set of media items. Its
     * presence is the only reliable indicator of more media items being available
     * in the next request.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Photos\Types\MediaItem[]|\Google\Protobuf\Internal\RepeatedField $media_items
     *           [Output only] List of media items that match the search parameters.
     *     @type string $next_page_token
     *           [Output only] Use this token to get the next set of media items. Its
     *           presence is the only reliable indicator of more media items being available
     *           in the next request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Photos\Library\V1\PhotosLibrary::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output only] List of media items that match the search parameters.
     *
     * Generated from protobuf field <code>repeated .google.photos.types.MediaItem media_items = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMediaItems()
    {
        return $this->media_items;
    }

    /**
     * [Output only] List of media items that match the search parameters.
     *
     * Generated from protobuf field <code>repeated .google.photos.types.MediaItem media_items = 1;</code>
     * @param \Google\Photos\Types\MediaItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMediaItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Photos\Types\MediaItem::class);
        $this->media_items = $arr;

        return $this;
    }

    /**
     * [Output only] Use this token to get the next set of media items. Its
     * presence is the only reliable indicator of more media items being available
     * in the next request.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * [Output only] Use this token to get the next set of media items. Its
     * presence is the only reliable indicator of more media items being available
     * in the next request.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

