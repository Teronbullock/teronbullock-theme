import { useSelect } from '@wordpress/data';
import { store as coreStore } from '@wordpress/core-data';
/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps } from '@wordpress/block-editor';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit({ attributes, setAttributes }) {
  const { postId } = useSelect(select => {
    return {
      postId: select('core/editor').getCurrentPostId(),
    };
  }, []);

  const { techNames, isLoaded } = useSelect(
    select => {
      const { getEntityRecords, hasFinishedResolution } = select('core');
      const query = { post: postId };
      const records = getEntityRecords('taxonomy', 'technologies', query);

      return {
        techNames: records ? records.map(term => term.name) : [],
        isLoaded: hasFinishedResolution('getEntityRecords', [
          'taxonomy',
          'technologies',
          query,
        ]),
      };
    },
    [postId],
  );
  const techNameStr = techNames.join(', ');

  return (
    <p {...useBlockProps()}>
      <span className='tb-tech-label'>
        {__('Technologies: ', 'technologies-block')}
      </span>
      <span className='tb-tech-value'>
        {__(techNameStr, 'technologies-block')}
      </span>
    </p>
  );
}
