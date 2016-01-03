<?php
/*
 * This file is part of the DockerComposeBundle package.
 *
 * (c) Issel Guberna <issel.guberna@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Octante\DockerComposeBundle\Traits;

trait DockerComposeList
{
    /**
     * @param $listName
     * @param $values
     * @param bool $keyValueList
     *
     * @return string
     */
    public function getFormattedList($listName, $values, $keyValueList = false)
    {
        $value = '';
        if (!empty($values)) {
            $value = "$listName: \n";
            if ($keyValueList) {
                foreach ($values as $listKey => $listValue) {
                    $value .= $this->getListItem($listKey . ': ' . $listValue);
                }
            } else {
                foreach ($values as $listValue) {
                    $value .= $this->getListItem($listValue);
                }
            }
        }

        return rtrim($value, "\n");
    }

    /**
     * @param $listItem
     *
     * @return string
     */
    private function getListItem($listItem)
    {
        return '    - ' . $listItem . "\n";
    }
}