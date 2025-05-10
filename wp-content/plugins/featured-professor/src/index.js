import './index.scss';
import { useSelect } from '@wordpress/data';

wp.blocks.registerBlockType('ourplugin/featured-professor', {
  title: 'Professor Callout',
  attributes: { profId: { type: 'string' } },
  description: 'Include a short description and link to a professor of your choice',
  icon: 'welcome-learn-more',
  category: 'common',
  edit: EditComponent,
  save: function () {
    return null;
  },
});

function EditComponent(props) {
  const professorsData = useSelect((select) =>
    select('core').getEntityRecords('postType', 'professor', { per_page: -1 })
  );

  if (!professorsData) return <p>Loading...</p>;

  const professors = professorsData.map((prof) => ({
    id: prof.id,
    title: prof.title.rendered,
  }));

  return (
    <div className="featured-professor-wrapper">
      <div className="professor-select-container">
        <select
          value={props.attributes.profId}
          onChange={(e) => props.setAttributes({ profId: e.target.value })}
        >
          <option value="">Please select a Professor!</option>
          {professors &&
            professors.length > 0 &&
            professors.map((prof) => {
              return (
                <option
                  value={prof.id}
                  selected={props.attributes.profId == prof.id}
                >
                  {prof.title || `Professor #${prof.id}`}
                </option>
              );
            })}
        </select>
      </div>
      <div>Prof {props.attributes.profId}</div>
    </div>
  );
}
