<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/photos/library/v1/photos_library.proto

namespace Google\Photos\Library\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to add media items to an album.
 *
 * Generated from protobuf message <code>google.photos.library.v1.BatchAddMediaItemsToAlbumRequest</code>
 */
class BatchAddMediaItemsToAlbumRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier of the [MediaItem][google.photos.types.MediaItem](s) to be
     * added.
     *
     * Generated from protobuf field <code>repeated string media_item_ids = 1;</code>
     */
    private $media_item_ids;
    /**
     * Identifier of the [Album][google.photos.types.Album] that the
     * [MediaItem][google.photos.types.MediaItem](s) are added to.
     *
     * Generated from protobuf field <code>string album_id = 2;</code>
     */
    private $album_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $media_item_ids
     *           Identifier of the [MediaItem][google.photos.types.MediaItem](s) to be
     *           added.
     *     @type string $album_id
     *           Identifier of the [Album][google.photos.types.Album] that the
     *           [MediaItem][google.photos.types.MediaItem](s) are added to.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Photos\Library\V1\PhotosLibrary::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier of the [MediaItem][google.photos.types.MediaItem](s) to be
     * added.
     *
     * Generated from protobuf field <code>repeated string media_item_ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMediaItemIds()
    {
        return $this->media_item_ids;
    }

    /**
     * Identifier of the [MediaItem][google.photos.types.MediaItem](s) to be
     * added.
     *
     * Generated from protobuf field <code>repeated string media_item_ids = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMediaItemIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->media_item_ids = $arr;

        return $this;
    }

    /**
     * Identifier of the [Album][google.photos.types.Album] that the
     * [MediaItem][google.photos.types.MediaItem](s) are added to.
     *
     * Generated from protobuf field <code>string album_id = 2;</code>
     * @return string
     */
    public function getAlbumId()
    {
        return $this->album_id;
    }

    /**
     * Identifier of the [Album][google.photos.types.Album] that the
     * [MediaItem][google.photos.types.MediaItem](s) are added to.
     *
     * Generated from protobuf field <code>string album_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAlbumId($var)
    {
        GPBUtil::checkString($var, True);
        $this->album_id = $var;

        return $this;
    }

}

