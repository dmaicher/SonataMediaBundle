<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\MediaBundle\Model;

use Sonata\DatagridBundle\Pager\PageableInterface;
use Sonata\Doctrine\Model\ManagerInterface;

/**
 * NEXT_MAJOR: Remove PageableManagerInterface extension.
 *
 * @phpstan-extends ManagerInterface<\Sonata\MediaBundle\Model\GalleryInterface>
 * @phpstan-extends PageableInterface<\Sonata\MediaBundle\Model\GalleryInterface>
 */
interface GalleryManagerInterface extends ManagerInterface, PageableInterface
{
}
